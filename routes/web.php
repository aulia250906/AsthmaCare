<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PertanyaanController;


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
});

Route::get('/saran', function () {
    return view('saran_kesehatan');
});
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
Route::get('/pertanyaan', [PertanyaanController::class, 'index'])->name('pertanyaan');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
