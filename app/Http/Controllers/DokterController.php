<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(Request $request)
    {
        // Ambil kata kunci dari input pencarian (jika ada)
        $search = $request->input('search');

        // Query pencarian (jika ada kata kunci)
        $doctors = Doctor::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('hospital', 'like', "%{$search}%");
            })
            ->get();

        // Kirim data ke view
        return view('dokter', compact('doctors', 'search'));
    }
}
