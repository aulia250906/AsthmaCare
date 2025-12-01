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

        $featuredReview = $reviews->first();

        return view('home', compact('reviews', 'featuredReview'));

    }
}
