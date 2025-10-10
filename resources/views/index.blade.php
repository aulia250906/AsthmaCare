<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AsthmaCare</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

  <!-- Navbar Index -->
  @include('components.navbar_index')

  <!-- Hero Section -->
  <section id="beranda" class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between mt-12 px-6 md:px-0">
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

</body>
</html>
