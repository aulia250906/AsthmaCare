<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/saran', function () {
    return view('saran_kesehatan');
});
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
