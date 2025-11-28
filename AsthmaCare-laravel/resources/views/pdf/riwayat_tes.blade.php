<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Riwayat Tes Asma</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        h2 { text-align: center; margin-bottom: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 6px; font-size: 11px; }
        th { background: #e0f7fa; }
    </style>
</head>
<body>

    <h2>Riwayat Tes Deteksi Gejala Asma</h2>

    <table>
        <thead>
            <tr>
                <th>Tanggal Tes</th>
                <th>Skor Tes</th>
                <th>Risiko</th>
                <th>Narasi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayat as $item)
                <tr>
                    <td>{{ optional($item->tanggal_tes)->format('d M Y H:i') }}</td>
                    <td>{{ $item->score ?? '-' }}</td>
                    <td>{{ $item->resiko ?? '-' }}</td>
                    <td>
                        {!! $item->narasi !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center;">Belum ada riwayat tes.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
