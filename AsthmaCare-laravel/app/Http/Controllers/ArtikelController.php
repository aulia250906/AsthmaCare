<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $query = Artikel::query();

        // 🔍 Filter berdasarkan judul
        if ($request->filled('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        // ⏳ Urutan artikel (default terbaru)
        $query->orderBy('created_at', $request->sort === 'terlama' ? 'asc' : 'desc');

        // Pagination
        $artikels = $query->paginate(4)->withQueryString();

        return view('artikel.index', compact('artikels'));
    }

    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();

        // Artikel lainnya (random) selain artikel yang sedang dibuka
        $sidebarArtikel = Artikel::where('id', '!=', $artikel->id)
                            ->inRandomOrder()
                            ->take(6)
                            ->get();

        return view('artikel.show', compact('artikel', 'sidebarArtikel'));
    }
}
