<footer class="bg-[#E9FCFF] text-gray-800 border-t border-gray-200">
  <!-- Kotak utama -->
  <div class="max-w-7xl mx-auto px-10 py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

    <!-- Kolom 1: Logo dan Deskripsi -->
    <div class="flex flex-col items-start space-y-3">
      <div class="flex items-center">
        <img src="{{ asset('images/logoasma.png') }}" alt="AsthmaCare Logo" class="w-12 h-12 mr-2">
        <h2 class="text-xl font-bold text-gray-900">AsthmaCare</h2>
      </div>
      <p class="text-sm leading-relaxed text-gray-700 pr-6">
        Kenali gejala lebih awal, dapatkan analisis cerdas, dan hidup lebih sehat.
      </p>
    </div>

    <!-- Kolom 2: Navigasi -->
    <div class="space-y-3">
      <h3 class="font-bold text-lg mb-2">Navigasi</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="/home" class="hover:text-[#00C9E1] transition">Beranda</a></li>
        <li><a href="/pertanyaan" class="hover:text-[#00C9E1] transition">Tes Asma</a></li>
        <li><a href="/artikel" class="hover:text-[#00C9E1] transition">Artikel</a></li>
        <li><a href="/ulasan" class="hover:text-[#00C9E1] transition">Ulasan</a></li>
        <li><a href="/home-about" class="hover:text-[#00C9E1] transition">Tentang Kami</a></li>
      </ul>
    </div>

    <!-- Kolom 3: Hubungi Kami -->
    <div class="space-y-3">
      <h3 class="font-bold text-lg mb-2">Hubungi Kami</h3>
      <ul class="space-y-3 text-sm">
        <li class="flex items-center space-x-3">
          <i class="fas fa-phone text-[#00C9E1]"></i>
          <span>+62 81234567</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fas fa-map-marker-alt text-[#00C9E1]"></i>
          <span>Politeknik Negeri Batam</span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fas fa-envelope text-[#00C9E1]"></i>
          <span><a href="">asthmacare@gmail.com</a></span>
        </li>
      </ul>
    </div>

    <!-- Kolom 4: Ikuti Kami -->
    <div class="space-y-3">
      <h3 class="font-bold text-lg mb-2">Ikuti Kami</h3>
      <ul class="space-y-3 text-sm">
        <li class="flex items-center space-x-3">
          <i class="fab fa-twitter text-[#00C9E1]"></i>
          <span><a href="">Twitter</a></span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fab fa-instagram text-[#00C9E1]"></i>
          <span><a href="">Instagram</a></span>
        </li>
        <li class="flex items-center space-x-3">
          <i class="fab fa-youtube text-[#00C9E1]"></i>
          <span><a href="">Youtube</a></span>
        </li>
      </ul>
    </div>

  </div>

  <!-- Bagian bawah lurus -->
  <div class="bg-[#00C9E1] text-white text-center text-sm py-3">
    ©2025 AsthmaCare, All Rights Reserved
  </div>
</footer>
