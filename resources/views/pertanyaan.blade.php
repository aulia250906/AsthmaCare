@extends('layout.app')

@section('title', 'Form Pertanyaan Tes Deteksi Gejala Asma')

@section('content')
<!-- Navbar -->
<x-navbar />

<!-- Hero Section -->
<section class="max-w-5xl mx-auto mt-10 p-10 bg-white rounded-3xl shadow-lg">
    <div class="flex flex-col md:flex-row items-center gap-8">
        <div class="flex-1">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3 leading-tight">
                Form Pertanyaan Tes Deteksi Gejala Asma
            </h1>
            <p class="text-gray-700 text-lg">
                Pilih gejala yang sedang kamu rasakan, lalu klik 
                <span class="font-semibold text-sky-600">Submit</span> untuk melihat hasil analisis.
            </p>
        </div>
        <div class="flex-shrink-0">
            <img src="{{ asset('images/orangbatuk.png') }}" alt="Asma Illustration" class="w-56 md:w-64">
        </div>
    </div>
</section>

<!-- Progress Section -->
<div class="max-w-5xl mx-auto mt-10 px-6">
    <p class="text-gray-700 font-medium mb-3 text-base">Pertanyaan 1 dari 15</p>
    <div class="w-full bg-gray-200 h-2.5 rounded-full">
        <div class="bg-sky-400 h-2.5 rounded-full transition-all duration-500" style="width: 7%;"></div>
    </div>
</div>

<!-- Question Card -->
<section class="max-w-5xl mx-auto mt-10 bg-white p-10 rounded-3xl shadow-lg">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Seberapa sering Anda mengalami sesak napas dalam 4 minggu terakhir?
    </h2>

    <form>
        <div class="space-y-4 text-lg">
            <label class="flex items-center space-x-3">
                <input type="radio" name="frekuensi" class="w-5 h-5 text-sky-500 focus:ring-sky-400">
                <span>Tidak Pernah</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="frekuensi" class="w-5 h-5 text-sky-500 focus:ring-sky-400">
                <span>1–2 Kali Seminggu</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="frekuensi" class="w-5 h-5 text-sky-500 focus:ring-sky-400">
                <span>3–6 Kali Seminggu</span>
            </label>

            <label class="flex items-center space-x-3">
                <input type="radio" name="frekuensi" class="w-5 h-5 text-sky-500 focus:ring-sky-400">
                <span>Setiap Hari</span>
            </label>
        </div>

        <!-- Buttons -->
        <div class="flex justify-end mt-10 gap-3">
  <button type="button"
          class="py-2 px-6 text-gray-900 font-semibold border border-gray-500 rounded-xl 
                 shadow-[-4px_4px_0px_rgba(150,150,150,1)] 
                 hover:translate-x-[-2px] hover:translate-y-[2px] 
                 hover:shadow-[-2px_2px_0px_rgba(150,150,150,1)] 
                 hover:bg-gray-100 transition duration-200 ease-in-out">
    Kembali
  </button>
  
  <button type="submit"
          class="py-2 px-6 text-white font-semibold bg-[#01E1FF] border border-white rounded-xl 
                 shadow-[-4px_4px_0px_rgba(150,150,150,1)] 
                 hover:translate-x-[-2px] hover:translate-y-[2px] 
                 hover:shadow-[-2px_2px_0px_rgba(150,150,150,1)] 
                 hover:bg-[#0BBAD1] transition duration-200 ease-in-out">
    Selanjutnya
  </button>
</div>

    </form>
</section>

@endsection
