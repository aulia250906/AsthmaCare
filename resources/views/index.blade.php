@extends('layout.app')

@section('title', 'Landing Page')

<!-- Navbar Index -->
@include('components.navbar_index')

<!-- Hero Section -->
<section id="beranda" class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between mt-28 md:mt-12 px-6 md:px-0">
  <div class="text-left max-w-lg">
    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
      Kelola Asma <br> Lebih Mudah <br> dengan <span class="text-black">AsthmaCare</span>
    </h1>
    <p class="text-gray-700 mt-4">
      Dapatkan tes kontrol asma, pemantauan gejala, dan panduan perawatan dalam satu aplikasi.
    </p>
    <div class="mt-6 flex space-x-4">
      <a href="#" class="bg-sky-400 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-sky-500 transition">Mulai Tes Sekarang</a>
      <a href="#" class="border border-gray-300 text-gray-800 font-medium px-6 py-3 rounded-lg hover:bg-gray-50 transition">Pelajari Lebih Lanjut</a>
    </div>
  </div>

  <div class="mt-10 md:mt-0 md:w-1/2 flex justify-center">
    <img src="{{ asset('images/dokterindex.png') }}" alt="Dokter AsthmaCare" class="w-80 md:w-96">
  </div>
</section>

<!-- Fitur Utama -->
<section id="fitur" class="bg-[#F3FDFF] mt-20 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-10">Fitur Utama</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <a href="#" class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center hover:shadow-lg transition">
        <img src="{{ asset('images/inhaler.png') }}" class="w-12 mb-4" alt="Tes Asma">
        <h3 class="font-semibold text-lg mb-2">Tes Kontrol Asma</h3>
        <p class="text-gray-600 text-sm">Ukur kontrol asma Anda secara praktis.</p>
      </a>
      <a href="#" class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center hover:shadow-lg transition">
        <img src="{{ asset('images/perisai.png') }}" class="w-12 mb-4" alt="Saran Kesehatan">
        <h3 class="font-semibold text-lg mb-2">Saran Kesehatan</h3>
        <p class="text-gray-600 text-sm">Dapatkan tips menjaga kesehatan paru-paru.</p>
      </a>
      <a href="#" class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center hover:shadow-lg transition">
        <img src="{{ asset('images/dokter.png') }}" class="w-12 mb-4" alt="Artikel Edukasi">
        <h3 class="font-semibold text-lg mb-2">Artikel & Edukasi</h3>
        <p class="text-gray-600 text-sm">Pelajari informasi terbaru tentang asma.</p>
      </a>
    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section class="max-w-6xl mx-auto px-6 md:px-0 mt-16 flex flex-col md:flex-row items-center justify-between">
  <div class="max-w-md md:mr-12">
    <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
    <p class="text-2xl text-gray-700 mb-4">
      AsthmaCare hadir untuk membantu Anda mengenali risiko asma lebih dini, mengambil keputusan tepat, dan hidup lebih sehat.
    </p>
    <p class="text-xl text-gray-700 mb-6">
      Tujuan kami adalah menyediakan alat dan sumber daya yang mudah digunakan untuk meningkatkan kualitas hidup pengguna.
    </p>
    <a href="#" class="inline-block bg-sky-400 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-sky-500 transition">Pelajari Lebih Lanjut</a>
  </div>
  <div class="mt-10 md:mt-0 md:w-1/2 flex justify-center md:justify-end">
    <img src="{{ asset('images/asmaorang.png') }}" alt="Tentang Kami" class="w-72 md:w-80">
  </div>
</section>

<!-- Kenapa Memilih Kami -->
<section class="bg-white mt-20 py-16">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-10">Kenapa Memilih AsthmaCare?</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
      <div class="flex items-center bg-[#F3FDFF] rounded-xl shadow-sm p-5">
        <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8 mr-3" alt="UI Icon">
        <h3 class="font-bold">Antarmuka Ramah Pengguna</h3>
      </div>
      <div class="flex items-center bg-[#F3FDFF] rounded-xl shadow-sm p-5">
        <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8 mr-3" alt="Medis Icon">
        <h3 class="font-bold">Tes yang Didukung Medis</h3>
      </div>
      <div class="flex items-center bg-[#F3FDFF] rounded-xl shadow-sm p-5">
        <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8 mr-3" alt="Akses Icon">
        <h3 class="font-bold">Akses Kapan Saja</h3>
      </div>
      <div class="flex items-center bg-[#F3FDFF] rounded-xl shadow-sm p-5">
        <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8 mr-3" alt="Privasi Icon">
        <h3 class="font-bold">Privasi Data Terjamin</h3>
      </div>
    </div>
  </div>
</section>

<!-- Kata Pengguna -->
<section class="bg-blue-50 mt-16 py-20">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-12 text-center">
      Apa Kata Pengguna Kami
    </h2>

    <div class="flex flex-col md:flex-row items-center justify-center gap-8 mx-auto max-w-5xl">
      <!-- Avatar -->
      <div class="flex-shrink-0 flex justify-center">
        <img src="{{ asset('images/orang.png') }}" alt="User" class="w-60 h-60 object-cover">
      </div>

      <!-- Isi Testimoni -->
      <div class="text-left md:text-left flex flex-col justify-center">
        <p class="text-gray-800 text-2xl leading-relaxed mb-6">
          "Aplikasi ini sangat membantu saya mengenali gejala asma lebih cepat. Analisisnya jelas, dan saya bisa langsung tahu kapan harus ke dokter."
        </p>
        <!-- Nilai / Rating -->
        <div class="text-yellow-400 text-2xl">
          ★★★★★
        </div>
      </div>
    </div>
  </div>
</section>



