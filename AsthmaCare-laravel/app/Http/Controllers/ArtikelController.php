<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        // Mulai query dasar
        $query = Artikel::query();

        // 🔍 Pencarian berdasarkan judul
        if ($request->has('search') && $request->search != '') {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // ⏳ Filter urutan (terbaru / terlama)
        if ($request->has('sort') && $request->sort == 'terlama') {
            $query->orderBy('created_at', 'asc');
        } else {
            $query->orderBy('created_at', 'desc'); // default: terbaru
        }

        // Pagination dan simpan query agar tidak hilang saat berpindah halaman
        $artikels = $query->paginate(4)->withQueryString();

        return view('artikel.index', compact('artikels'));
    }

    public function show(Artikel $artikel)
    {
        return view('artikel.show', compact('artikel'));
    }

}
