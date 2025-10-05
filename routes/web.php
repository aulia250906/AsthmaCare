<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saran', function () {return view('saran_kesehatan');});
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
