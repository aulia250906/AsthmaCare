<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('reviews', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);

        Review::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Terima kasih atas ulasanmu!');
    }
}
