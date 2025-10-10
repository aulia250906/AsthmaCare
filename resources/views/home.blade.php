@extends('layout.app')

@section('title', 'Home')

@section('content')

  <!-- Navbar -->
  <x-navbar />

  <!-- Hero Section -->
  <section class="max-w-6xl mx-auto mt-16 p-8 bg-white rounded-3xl shadow-lg flex flex-col md:flex-row items-center justify-between">
    <div class="text-left max-w-lg">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
        Halo, {{ Auth::user()->username }} 👋 <br>
        Selamat Datang di <span class="text-black">AsthmaCare!</span>
      </h1>
      <p class="text-gray-700 mt-4 text-lg">
        “Kenali gejala lebih awal, dapatkan analisis cerdas, dan hidup lebih sehat.”
      </p>
      <div class="mt-6">
        <a href="#" class="bg-sky-400 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-sky-500 transition">
          Mulai Tes Sekarang
        </a>
      </div>
    </div>

    <div class="mt-10 md:mt-0 md:w-1/2 flex justify-center">
      <img src="{{ asset('images/asmaorang.png') }}" alt="Pengguna Inhaler" class="w-80 md:w-96">
    </div>
  </section>

@endsection
