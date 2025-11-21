@extends('layout.app')

@section('content')


<body class="bg-gray-50">
    
<x-navbar />

  <!-- Main Content -->
  <main class="max-w-4xl mx-auto py-10 px-6">

    <!-- Title -->
    <div class="text-center mb-8">
      <h2 class="text-2xl font-bold text-gray-800">
        Selamat Anda telah menyelesaikan tes deteksi gejala Asma 🎉
      </h2>
    </div>

    <!-- Info Section -->
    <div class="grid grid-cols-2 gap-4 mb-6">
      <div class="bg-sky-100 text-gray-800 rounded-xl p-4 shadow">
        <p class="text-sm font-semibold">Nama Responden :</p>
        <p class="font-medium">User</p>
      </div>
      <div class="bg-sky-100 text-gray-800 rounded-xl p-4 shadow">
        <p class="text-sm font-semibold">Tanggal Tes :</p>
        <p class="font-medium">27/09/2025</p>
      </div>
    </div>

    <!-- Risiko Asma -->
    <section class="bg-white p-6 rounded-2xl shadow-lg mb-6">
      <h3 class="text-lg font-semibold mb-4 text-center">Risiko Asma Tinggi</h3>

      <!-- Progress Bar -->
      <div class="w-full bg-gray-200 rounded-full h-6 mb-4">
        <div class="bg-red-500 h-6 rounded-full relative" style="width: 75%;">
          <span class="absolute right-2 top-0 text-white text-sm font-bold">15</span>
        </div>
      </div>

      <!-- Penjelasan -->
      <div class="bg-sky-50 border-l-4 border-sky-400 p-4 rounded-md">
        <p class="text-gray-700 text-sm leading-relaxed">
          Risiko Asma Tinggi berarti jawaban Anda menunjukkan adanya gejala yang cukup sering muncul.
          Ini bukan diagnosis pasti, tetapi indikasi bahwa gejala Anda perlu diperhatikan.
          Deteksi dini akan membantu Anda lebih mudah mengendalikan asma dan tetap beraktivitas dengan nyaman.
          Disarankan untuk melakukan konsultasi dengan tenaga medis agar lebih jelas.
        </p>
      </div>
    </section>

    <!-- Saran Artikel -->
    <section class="mb-8">
      <h4 class="font-semibold text-gray-800 mb-3">Saran Artikel</h4>
      <div class="grid grid-cols-3 gap-4">
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
            Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
          </p>
          <a href="#" class="text-sky-600 text-sm hover:underline">Baca Selengkapnya →</a>
        </div>
        <div class="bg-gray-100 rounded-xl p-3 text-center shadow">
          <div class="bg-gray-200 h-24 rounded mb-3"></div>
          <p class="font-medium text-sm text-gray-800">
            Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
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
      <a href="#" class="text-sky-700 font-medium hover:underline">
        Klik Disini untuk Saran Kesehatan
      </a>
      <div class="mt-4 flex justify-center">
        <img src="https://cdn-icons-png.flaticon.com/512/4201/4201973.png" alt="icon" class="w-20 h-20">
      </div>
    </section>

    <!-- Buttons -->
    <div class="flex justify-center gap-4 mt-8">
      <button class="bg-sky-500 text-white px-5 py-2 rounded-lg hover:bg-sky-600 transition">
        Lihat Kembali Jawaban
      </button>
      <button class="bg-sky-500 text-white px-5 py-2 rounded-lg hover:bg-sky-600 transition">
        Download PDF
      </button>
      <button class="bg-sky-500 text-white px-5 py-2 rounded-lg hover:bg-sky-600 transition">
        Lihat Riwayat Tes
      </button>
    </div>

  </main>

<x-footer />

</body>
</html>
