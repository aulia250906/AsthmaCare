<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;

//Route::get('/', function () { return view('welcome');});

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::view('/terms', 'auth.terms')->name('terms');
Route::view('/privacy', 'auth.privacy')->name('privacy');

Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
});

Route::get('/saran', function () {
    return view('saran_kesehatan');
});

Route::get('/hasil', function () {
    return view('hasil_deteksi');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});


Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
Route::get('/pertanyaan', [PertanyaanController::class, 'index'])->name('pertanyaan');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/ulasan', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/ulasan', [ReviewController::class, 'store'])->name('reviews.store');
