<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hasil Tes Deteksi Gejala Asma</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        h2, h3 { text-align: center; margin-bottom: 10px; }
        .box { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; }
        .label { font-weight: bold; }
    </style>
</head>
<body>

    <h2>Hasil Tes Deteksi Gejala Asma</h2>

    <div class="box">
        <p><span class="label">Nama Responden: </span>
            {{ optional($hasil->user)->name ?? '-' }}
        </p>
        <p><span class="label">Tanggal Tes: </span>
            {{ optional($hasil->tanggal_tes)->format('d/m/Y H:i') ?? '-' }}
        </p>
        <p><span class="label">Skor: </span>
            {{ $hasil->score }} / 20
        </p>
        <p><span class="label">Risiko: </span>
            {{ $hasil->resiko ?? '-' }}
        </p>
    </div>

    <div class="box">
        <p class="label">Narasi / Penjelasan:</p>
        <div>
            {!! $hasil->narasi !!}
        </div>
    </div>

    <p style="font-size: 10px; margin-top: 20px;">
        Catatan: Hasil ini merupakan prediksi berbasis model dan bukan diagnosis medis pasti.
        Untuk kepastian, silakan konsultasikan dengan tenaga kesehatan profesional.
    </p>

</body>
</html>
