<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HasilTes;
use Barryvdh\DomPDF\Facade\Pdf;

class RiwayatController extends Controller
{
    public function index()
    {
        // Ambil riwayat tes user yg lagi login
        $riwayat = HasilTes::where('user_id', auth()->id())
            ->orderBy('tanggal_tes', 'desc')
            ->get();

        return view('riwayat', compact('riwayat'));
    }

     // ➕ EXPORT PDF UNTUK RIWAYAT
    public function exportPdf()
    {
        $riwayat = HasilTes::where('user_id', auth()->id())
            ->orderBy('tanggal_tes', 'desc')
            ->get();

        $pdf = Pdf::loadView('pdf.riwayat_tes', compact('riwayat'));

        return $pdf->download('riwayat-tes-'.auth()->id().'.pdf');
    }
}
