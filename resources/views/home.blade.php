@extends('layout.app')

@section('title', 'Home')

@section('content')

  <!-- Navbar -->
@include('components.navbar')

  <!-- Hero Section -->
  <section class="max-w-6xl mx-auto mt-8 p-8 bg-white rounded-3xl shadow-lg flex flex-col md:flex-row items-center justify-between">
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
      <a href="/saran" class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center hover:shadow-lg transition">
        <img src="{{ asset('images/perisai.png') }}" class="w-12 mb-4" alt="Saran Kesehatan">
        <h3 class="font-semibold text-lg mb-2">Saran Kesehatan</h3>
        <p class="text-gray-600 text-sm">Dapatkan tips menjaga kesehatan paru-paru.</p>
      </a>
      <a href="/artikel" class="bg-white shadow-md rounded-2xl p-6 flex flex-col items-center hover:shadow-lg transition">
        <img src="{{ asset('images/dokter.png') }}" class="w-12 mb-4" alt="Artikel Edukasi">
        <h3 class="font-semibold text-lg mb-2">Artikel & Edukasi</h3>
        <p class="text-gray-600 text-sm">Pelajari informasi terbaru tentang asma.</p>
      </a>
    </div>
  </div>
</section>

<!-- Artikel -->
<section id="artikel" class="bg-white mt-20 py-16">
  <div class="max-w-6xl mx-auto px-6">
    
    <!-- Judul -->
    <div class="mb-10">
      <p class="text-black font-semibold text-2xl">💡 Tahukah kamu?</p>
    </div>

    <!-- Grid Artikel -->
    <div class="grid grid-cols-1 gap-8 sm:gap-10">
      
      @foreach ([
        ['title' => 'Gejala Asma atau Flu Biasa? Begini Cara Membedakannya',
         'desc' => 'Cara membedakan gejala asma dengan flu biasa, mulai dari durasi gejala hingga respons terhadap obat.',
         'img' => 'images/artikel1.png'],
        ['title' => 'Pertolongan Pertama pada Asma: Langkah-Langkah Penting',
         'desc' => 'Langkah-langkah penting dalam memberikan pertolongan pertama saat serangan asma terjadi.',
         'img' => 'images/artikel2.png']
      ] as $artikel)
      
      <div class="bg-[#F9FCFD] border border-gray-200 rounded-2xl shadow-sm flex flex-col md:flex-row p-6 sm:p-8 hover:shadow-md hover:scale-[1.02] hover:-translate-y-1 transition duration-300">
        <div class="flex-1">
          <h3 class="font-semibold text-xl sm:text-2xl text-gray-800">{{ $artikel['title'] }}</h3>
          <p class="text-gray-600 mt-3 sm:mt-4 text-base sm:text-lg leading-relaxed">{{ $artikel['desc'] }}</p>
          <a href="#" class="text-sky-500 mt-4 sm:mt-5 inline-block font-medium text-base sm:text-lg hover:underline">Baca Selengkapnya →</a>
        </div>
        <div class="mt-5 sm:mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-44 sm:h-52 bg-gray-100 flex items-center justify-center rounded-xl overflow-hidden">
          <img src="{{ asset($artikel['img']) }}" alt="{{ $artikel['title'] }}" class="object-cover w-full h-full">
        </div>
      </div>

      @endforeach

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


@endsection