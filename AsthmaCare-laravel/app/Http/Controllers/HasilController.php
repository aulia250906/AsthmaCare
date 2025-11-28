<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilTes;
use App\Models\Artikel; // ⬅️ tambahan: import model Artikel
use Barryvdh\DomPDF\Facade\Pdf;

class HasilController extends Controller
{
    // list semua/riwayat tes user
    public function index()
    {
        $hasil = HasilTes::where('user_id', auth()->id())
            ->orderBy('tanggal_tes', 'desc')
            ->get();

        return view('hasil.index', compact('hasil'));
    }

    // detail 1 hasil tes
    public function show($id)
    {
        $hasil = HasilTes::findOrFail($id);

        // ⬅️ tambahan: ambil artikel dari database (misal 3 random)
        $artikels = Artikel::inRandomOrder()->take(3)->get();

        // kirim ke view tanpa mengubah yg sudah ada, hanya nambah variabel
        return view('hasil_deteksi', compact('hasil', 'artikels'));
    }

     public function downloadPdf($id)
    {
        $hasil = HasilTes::findOrFail($id);

        // view khusus PDF, hanya kirim $hasil
        $pdf = Pdf::loadView('pdf.hasil_tes', compact('hasil'));

        return $pdf->download('hasil-tes-asthma-'.$hasil->id.'.pdf');
    }
}
