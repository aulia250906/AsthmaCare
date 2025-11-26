@extends('layout.app')

@section('title', 'Hasil Tes Deteksi Gejala Asma')

@section('content')

@auth
    <x-navbar />
@else
    <x-navbar_index />
@endauth

@php
    $riskLevel   = $hasil['risk_level'] ?? 'Tidak Diketahui';
    $score       = $hasil['score'] ?? 0;               // 1–20
    // $prob        = $hasil['probability'] ?? 0;      // sudah tidak dipakai di view
    // $topsis      = $hasil['topsis'] ?? 0;           // sudah tidak dipakai di view
    $narrative   = $hasil['narrative'] ?? 'Hasil narasi tidak tersedia.';

    // Lebar progress bar (min 5% supaya tetap kelihatan)
    $width       = max(5, min(($score / 20) * 100, 100));

    // Warna bar berdasarkan risiko
    $barColor    = $riskLevel === 'High' ? 'bg-red-500' : 'bg-green-500';

    // Judul text untuk risiko
    $riskTitle   = $riskLevel === 'High' ? 'Risiko Asma Tinggi' : ($riskLevel === 'Low' ? 'Risiko Asma Rendah' : 'Risiko Asma');
@endphp

<main class="max-w-4xl mx-auto py-10 px-6 bg-gray-50 min-h-screen">

    <!-- Title -->
    <div class="text-center mb-8">
      <h2 class="text-2xl font-bold text-gray-800">
        Selamat, Anda telah menyelesaikan tes deteksi gejala Asma 🎉
      </h2>
      <p class="text-gray-600 mt-2 text-sm">
        Berikut adalah rangkuman hasil analisis berdasarkan jawaban Anda.
      </p>
    </div>

    <!-- Info Section -->
    <div class="grid grid-cols-2 gap-4 mb-6">
      <div class="bg-sky-100 text-gray-800 rounded-xl p-4 shadow">
        <p class="text-sm font-semibold">Nama Responden :</p>
        <p class="font-medium">
            {{ auth()->user()->name ?? 'User' }}
        </p>
      </div>
      <div class="bg-sky-100 text-gray-800 rounded-xl p-4 shadow">
        <p class="text-sm font-semibold">Tanggal Tes :</p>
        <p class="font-medium">
            {{ now()->format('d/m/Y') }}
        </p>
      </div>
    </div>

    <!-- Risiko Asma -->
    <section class="bg-white p-6 rounded-2xl shadow-lg mb-6">
      <h3 class="text-lg font-semibold mb-1 text-center">
        {{ $riskTitle }}
      </h3>
      <p class="text-center text-sm text-gray-600 mb-4">
        Skor Risiko: <span class="font-semibold">{{ $score }}</span> dari 20  
        <span class="block text-xs text-gray-500 mt-1">
          Semakin tinggi skor, semakin besar indikasi risiko asma berdasarkan jawaban Anda.
        </span>
      </p>

      <!-- Progress Bar -->
      <div class="w-full bg-gray-200 rounded-full h-6 mb-4 overflow-hidden">
        <div class="{{ $barColor }} h-6 rounded-full relative transition-all duration-500" style="width: {{ $width }}%;">
          <span class="absolute right-2 top-0 text-white text-sm font-bold leading-6">
            {{ $score }}
          </span>
        </div>
      </div>

      <!-- Penjelasan / Narasi dari FastAPI -->
      <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-md">
        <p class="text-gray-700 text-sm leading-relaxed">{!! $narrative !!}</p>

        <p class="text-gray-500 text-xs">
          Catatan: Hasil ini merupakan prediksi berbasis model dan bukan diagnosis medis pasti. 
          Untuk kepastian, silakan konsultasikan dengan tenaga kesehatan profesional.
        </p>
      </div>
    </section>

    <!-- Saran Artikel -->
    <section class="mb-8">
      <h4 class="font-semibold text-gray-800 mb-3">Saran Artikel</h4>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-gray-100 rounded-xl p-3 text-center shadow">
          <div class="bg-gray-200 h-24 rounded mb-3"></div>
          <p class="font-medium text-sm text-gray-800">
            Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
          </p>
          <a href="#" class="text-sky-600 text-sm hover:underline">Baca Selengkapnya →</a>
        </div>
        <div class="bg-gray-100 rounded-xl p-3 text-center shadow">
          <div class="bg-gray-200 h-24 rounded mb-3"></div>
          <p class="font-medium text-sm text-gray-800">
            Tips Mengendalikan Asma agar Tetap Aktif Sehari-hari
          </p>
          <a href="#" class="text-sky-600 text-sm hover:underline">Baca Selengkapnya →</a>
        </div>
        <div class="bg-gray-100 rounded-xl p-3 text-center shadow">
          <div class="bg-gray-200 h-24 rounded mb-3"></div>
          <p class="font-medium text-sm text-gray-800">
            Lingkungan Sehat untuk Penderita Asma di Rumah
          </p>
          <a href="#" class="text-sky-600 text-sm hover:underline">Baca Selengkapnya →</a>
        </div>
      </div>
    </section>

    <!-- Rekomendasi -->
    <section class="bg-sky-100 rounded-2xl p-6 text-center shadow-md">
      <h4 class="text-lg font-semibold mb-2 text-gray-800">
        Rekomendasi & Saran Kesehatan untuk Penderita Asma
      </h4>
      <a href="/saran" class="text-sky-700 font-medium hover:underline">
        Klik di sini untuk Saran Kesehatan
      </a>
      <div class="mt-4 flex justify-center">
        <img src="https://cdn-icons-png.flaticon.com/512/4201/4201973.png" alt="icon" class="w-20 h-20">
      </div>
    </section>

    <!-- Buttons -->
    <div class="flex justify-center gap-4 mt-8">
      <a href="{{ route('pertanyaan.form') }}"
         class="bg-sky-500 text-white px-5 py-2 rounded-lg hover:bg-sky-600 transition text-sm md:text-base">
        Lihat Kembali Jawaban
      </a>
      <button class="bg-sky-500 text-white px-5 py-2 rounded-lg hover:bg-sky-600 transition text-sm md:text-base">
        Download PDF
      </button>
      <button class="bg-sky-500 text-white px-5 py-2 rounded-lg hover:bg-sky-600 transition text-sm md:text-base">
        Lihat Riwayat Tes
      </button>
    </div>

</main>

<x-footer />

@endsection
