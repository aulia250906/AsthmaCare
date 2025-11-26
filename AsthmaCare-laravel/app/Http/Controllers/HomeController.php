<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua ulasan terbaru
        $reviews = Review::latest()->get();

        return view('home', compact('reviews'));
    }
}
