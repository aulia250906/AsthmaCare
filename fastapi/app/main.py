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

    # ==========================
    # Langkah pencegahan DINAMIS
    # ==========================
    prevention_steps = []

    # 1. Kebiasaan merokok
    smoking = str(data_in.get("Smoking_Status", "")).lower()
    if any(k in smoking for k in ["current", "perokok", "smoker", "ya", "aktif"]):
        prevention_steps.append(
            "Segera berhenti merokok dan kurangi paparan asap rokok di rumah maupun di tempat kerja."
        )
    else:
        prevention_steps.append(
            "Tetap hindari paparan asap rokok, termasuk asap rokok orang lain (perokok pasif)."
        )

    # 2. Aktivitas fisik
    activity = str(data_in.get("Physical_Activity_Level", "")).lower()
    if any(k in activity for k in ["low", "rendah", "jarang"]):
        prevention_steps.append(
            "Mulai rutin berolahraga 3–5 kali per minggu dengan intensitas ringan hingga sedang, "
            "misalnya jalan kaki, bersepeda ringan, atau senam pernapasan."
        )
    else:
        prevention_steps.append(
            "Pertahankan kebiasaan aktivitas fisik Anda dan tetap lakukan pemanasan sebelum berolahraga."
        )

    # 3. BMI / berat badan
    try:
        bmi = float(data_in.get("BMI", 0))
    except Exception:
        bmi = 0

    if bmi >= 25:
        prevention_steps.append(
            "Upayakan menurunkan berat badan secara bertahap dengan pola makan sehat dan aktivitas fisik teratur "
            "karena berat badan berlebih dapat memperberat kerja paru-paru."
        )
    elif 0 < bmi < 18.5:
        prevention_steps.append(
            "Pastikan asupan gizi seimbang agar berat badan tidak terlalu rendah dan daya tahan tubuh tetap baik."
        )
    else:
        prevention_steps.append(
            "Pertahankan berat badan ideal dengan pola makan seimbang dan gaya hidup aktif."
        )

    # 4. Alergi
    allergies = str(data_in.get("Allergies", "")).lower()
    if allergies not in ["", "0", "tidak", "none", "no", "tidak ada"]:
        prevention_steps.append(
            f"Menghindari pencetus alergi yang Anda miliki (misalnya: {data_in.get('Allergies')}) "
            "dengan menjaga kebersihan rumah, mengganti sprei secara rutin, dan menghindari debu serta bulu hewan."
        )
    else:
        prevention_steps.append(
            "Tetap menjaga kebersihan lingkungan rumah untuk mengurangi debu, jamur, dan tungau."
        )

    # 5. Polusi udara
    pollution = str(data_in.get("Air_Pollution_Level", "")).lower()
    if any(k in pollution for k in ["high", "tinggi", "buruk"]):
        prevention_steps.append(
            "Batasi aktivitas di luar ruangan saat kualitas udara buruk dan gunakan masker bila harus keluar rumah."
        )
    else:
        prevention_steps.append(
            "Tetap perhatikan kualitas udara dan usahakan menghindari paparan polusi yang tidak perlu."
        )

    # 6. Pekerjaan
    occupation = str(data_in.get("Occupation_Type", "")).lower()
    if any(k in occupation for k in ["pabrik", "industri", "outdoor", "lapangan"]):
        prevention_steps.append(
            "Jika pekerjaan Anda berisiko terpapar debu, bahan kimia, atau asap, gunakan alat pelindung diri "
            "seperti masker dan ikuti prosedur kesehatan dan keselamatan kerja."
        )

    # 7. Komorbiditas
    comorb = str(data_in.get("Comorbidities", "")).lower()
    if comorb not in ["", "0", "tidak", "none", "no"]:
        prevention_steps.append(
            f"Mengelola penyakit penyerta yang Anda miliki (misalnya: {data_in.get('Comorbidities')}) "
            "dengan kontrol rutin dan mengikuti anjuran pengobatan dari dokter."
        )

    # 8. Saran umum tambahan (selalu bagus untuk semua orang)
    prevention_steps.append(
        "Segera konsultasi ke tenaga medis jika muncul gejala seperti batuk lama, mengi (napas berbunyi), "
        "atau sesak napas, terutama bila sering kambuh."
    )

    # Ubah ke <li> ... </li>
    bullet_list = "".join([f"<li>{step}</li>" for step in prevention_steps])

    # Penutup berdasarkan kategori risiko
    if label == "High":
        extra = (
            "Karena tingkat risiko Anda tinggi, <b>segera konsultasikan</b> dengan dokter "
            "spesialis paru atau penyakit dalam untuk evaluasi lebih lanjut dan penanganan yang tepat."
        )
    elif label == "Moderate":
        extra = (
            "Dengan risiko sedang, Anda perlu menerapkan langkah pencegahan di atas secara konsisten "
            "dan melakukan kontrol rutin bila memiliki keluhan pernapasan."
        )
    else:
        extra = (
            "Walaupun risiko rendah, tetap jaga pola hidup sehat dan lakukan pemeriksaan "
            "bila muncul tanda seperti batuk lama, sesak, atau keluhan lain yang mengganggu."
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

        # ubah combined (0–1) ke skala 1–100
        combined = result["combined"]
        score_1_100 = max(1, min(int(round(combined * 100)), 100))

        return {
            "risk_level": result["risk_level"],   # "Low", "Moderate", "High"
            "score": score_1_100,                 # 1–100
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
