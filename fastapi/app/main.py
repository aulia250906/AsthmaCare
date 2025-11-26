from fastapi import FastAPI
from fastapi.responses import JSONResponse
from pydantic import BaseModel
import joblib
import numpy as np
import pandas as pd
import traceback

app = FastAPI()

# ==========================
# 1. Schema request body
# ==========================
class AsthmaInput(BaseModel):
    Age: float
    Gender: str
    BMI: float
    Smoking_Status: str
    Family_History: str      # "0" atau "1"
    Allergies: str
    Air_Pollution_Level: str
    Physical_Activity_Level: str
    Occupation_Type: str
    Comorbidities: str       # "0", "Diabetes", dll

# ==========================
# 2. Load model & preprocessors
#    (path sesuaikan dengan file kamu)
# ==========================
rf_model = joblib.load("app/models/rf_asthma_model.pkl")
rf_calibrator = joblib.load("app/models/rf_calibrator.pkl")
scaler = joblib.load("app/models/scaler.pkl")
encoders = joblib.load("app/models/encoders.pkl")
topsis_weights = joblib.load("app/models/topsis_weights.pkl")

FEATURES = [
    "Age", "Gender", "BMI", "Smoking_Status", "Family_History",
    "Allergies", "Air_Pollution_Level", "Physical_Activity_Level",
    "Occupation_Type", "Comorbidities"
]

# ==========================
# 3. Narasi jawaban
# ==========================
def generate_narrative(data_in, rf_prob, topsis_score, label):
    # Judul berdasarkan risiko
    if label == "High":
        risk_text = (
            "<b>Anda berada pada kategori risiko asma TINGGI.</b> "
            "Faktor-faktor yang Anda miliki menunjukkan kemungkinan besar terjadinya asma "
            "atau kambuhnya gejala."
        )
    elif label == "Moderate":
        risk_text = (
            "<b>Anda berada pada kategori risiko asma SEDANG.</b> "
            "Beberapa faktor risiko cukup berpengaruh sehingga Anda perlu lebih waspada "
            "dan mulai fokus pada pencegahan."
        )
    else:
        risk_text = (
            "<b>Anda berada pada kategori risiko asma RENDAH.</b> "
            "Risiko Anda relatif kecil, namun tetap penting menjaga pola hidup sehat "
            "agar risiko tidak meningkat di kemudian hari."
        )

    # Langkah pencegahan
    prevention_steps = [
        "Menghindari paparan asap rokok dan berhenti merokok jika Anda perokok.",
        "Mengurangi paparan polusi udara, misalnya dengan memakai masker di area berpolusi.",
        "Menjaga berat badan ideal dengan pola makan seimbang dan olahraga teratur.",
        "Menghindari pencetus alergi seperti debu, bulu hewan, atau serbuk sari.",
        "Membersihkan rumah secara rutin untuk mengurangi debu dan jamur.",
        "Berolahraga dengan intensitas ringan hingga sedang dengan pemanasan cukup.",
        "Segera konsultasi ke tenaga medis jika muncul gejala seperti batuk lama, atau sesak."
    ]

    bullet_list = "".join([f"<li>{step}</li>" for step in prevention_steps])

    if label == "High":
        extra = (
            "Karena tingkat risiko Anda tinggi, <b>segera konsultasikan</b> dengan dokter "
            "spesialis paru untuk evaluasi dan penanganan yang tepat."
        )
    elif label == "Moderate":
        extra = (
            "Dengan risiko sedang, Anda perlu menerapkan langkah pencegahan di atas secara konsisten "
            "dan melakukan kontrol rutin bila memiliki keluhan pernapasan."
        )
    else:
        extra = (
            "Walaupun risiko rendah, tetap jaga pola hidup sehat dan lakukan pemeriksaan "
            "bila muncul tanda seperti batuk lama, sesak, atau lainnya."
        )

    return (
        f"{risk_text}<br><br>"
        f"Langkah pencegahan yang dapat Anda lakukan:<br>"
        f"<ul>{bullet_list}</ul><br>"
        f"{extra}<br><br>"
    )

# ==========================
# 4. Fungsi prediksi utama
#    (DISAMAKAN dengan script testing!)
# ==========================
def process_prediction(data: AsthmaInput):
    data_in = data.dict()

    # --- Encoding & DataFrame (persis seperti script CLI kamu) ---
    row = []
    for col in FEATURES:
        val = data_in[col]
        if col in encoders:
            try:
                row.append(int(encoders[col].transform([str(val)])[0]))
            except Exception:
                # fallback kalau ada label baru yang tidak dikenal encoder
                row.append(0)
        else:
            row.append(float(val))

    df_row = pd.DataFrame([row], columns=FEATURES)

    # --- Scaling untuk TOPSIS ---
    row_scaled = scaler.transform(df_row)

    # --- Normalisasi TOPSIS ---
    denom = np.sqrt((row_scaled**2).sum(axis=0))
    denom[denom == 0] = 1  # hindari pembagian 0
    R_row = row_scaled / denom
    topsis_score = float(np.dot(R_row, topsis_weights)[0])

    # --- Probabilitas Random Forest ---
    rf_prob = float(rf_calibrator.predict_proba(df_row)[0][1])

    # --- Kombinasi & label risiko (persis CLI) ---
    combined = 0.6 * topsis_score + 0.4 * rf_prob
    if combined >= 0.7:
        risk_label = "High"
    elif combined >= 0.4:
        risk_label = "Moderate"
    else:
        risk_label = "Low"

    narrative = generate_narrative(data_in, rf_prob, topsis_score, risk_label)

    return {
        "risk_level": risk_label,
        "combined": combined,
        "probability": rf_prob,
        "topsis": topsis_score,
        "narrative": narrative
    }

# ==========================
# 5. Endpoint FastAPI
# ==========================
@app.post("/predict")
def predict_endpoint(data: AsthmaInput):
    try:
        result = process_prediction(data)

        # ubah combined (0–1) ke skala 1–20
        combined = result["combined"]
        score_1_20 = max(1, min(int(round(combined * 20)), 20))

        return {
            "risk_level": result["risk_level"],   # "Low", "Moderate", "High"
            "score": score_1_20,                  # 1–20
            "probability": result["probability"],
            "topsis": result["topsis"],
            "narrative": result["narrative"]
        }

    except Exception as e:
        # print ke terminal biar kamu bisa lihat stacktrace
        traceback.print_exc()
        # kirim detail ke Laravel supaya nggak cuma "Internal Server Error"
        return JSONResponse(
            status_code=500,
            content={"detail": "Prediction error", "error": str(e)}
        )
