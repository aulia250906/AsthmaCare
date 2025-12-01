@extends('layout.app') 

@section('title', 'Home')

<!-- Navbar Index -->
@include('components.navbar')

<!-- Hero Section - IMPROVED -->
<section id="beranda" class="relative max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between mt-32 md:mt-8 px-8 md:px-12 mb-20 overflow-hidden">
  
  <!-- Decorative Background Elements -->
  <div class="absolute top-0 left-0 w-72 h-72 bg-sky-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
  
  <div class="relative z-10 text-left max-w-xl">
    <!-- Trust Badge -->
    <div class="inline-flex items-center gap-2 bg-sky-50 border border-sky-200 rounded-full px-4 py-2 mb-6">
      <span class="text-sky-600 text-2xl">✓</span>
      <span class="text-sky-700 font-semibold text-sm">Sahabat Pernafasan Anda</span>
    </div>
    
    <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
      Kelola Asma <br> Lebih Mudah <br> dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-[#12E4FF]">AsthmaCare</span>
    </h1>
    
    <p class="text-gray-600 text-lg mt-6 leading-relaxed mb-4">
      Dapatkan tes kontrol asma, pemantauan gejala, dan panduan perawatan dalam satu aplikasi.
    </p>
    
    <!-- Key Benefits Icons -->
    <div class="flex flex-wrap gap-4 mb-8">
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <span class="text-sm text-gray-600 font-medium">Gratis & Mudah</span>
      </div>
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <span class="text-sm text-gray-600 font-medium">24/7 Akses</span>
      </div>
    </div>
    <div>
    <a href="/pertanyaan" class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:from-[#0097a7] hover:to-[#55c6ff] hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center">Mulai Tes Sekarang</a>
    <a href="#fitur" class="border-2 border-gray-300 text-gray-800 font-semibold px-8 py-4 rounded-xl hover:bg-gray-50 hover:border-gray-400 transition-all duration-300 text-center">Lihat Fitur</a>
    </div>  
  </div>

  <div class="relative z-10 mt-12 md:mt-0 md:w-1/2 flex justify-center">
    <div class="relative">
      <!-- Floating animation -->
      <div class="animate-float">
        <img src="{{ asset('images/dokterindex.png') }}" alt="Dokter AsthmaCare" class="w-96 md:w-[450px] drop-shadow-2xl">
      </div>
      <!-- Decorative elements around image -->
      <div class="absolute -top-6 -right-6 w-20 h-20 bg-sky-400 rounded-full opacity-20 animate-ping"></div>
      <div class="absolute -bottom-6 -left-6 w-16 h-16 bg-blue-400 rounded-full opacity-20 animate-ping" style="animation-delay: 0.5s;"></div>
    </div>
  </div>
</section>

<!-- Fitur Utama - IMPROVED -->
  <x-home-fitur />

<!-- Tentang Kami -->
  <x-home-about />

<!-- Kenapa Memilih Kami - IMPROVED -->
  <x-home-why />

<!-- Testimonials - IMPROVED -->
  <x-home-review :reviews="$reviews" />

@include('components.footer')

<!-- Custom Animations -->
<style>
@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-20px);
  }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}
</style>