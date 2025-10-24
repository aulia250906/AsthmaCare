<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DokterController extends Controller
{
     public function index()
    {
        // Ambil semua data dokter dari database
        $doctors = Doctor::all();
        
        // Kirim ke view 'dokter'
        return view('dokter', compact('doctors'));
    }
}
