@extends('layout.app')

@section('title', 'Home')

@section('content')

<!-- Navbar -->
@include('components.navbar')

<!-- Hero Section - IMPROVED -->
<section class="relative max-w-7xl mx-auto mt-12 mb-20 px-8 md:px-12 overflow-hidden">
  <div class="bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 rounded-3xl shadow-2xl p-10 md:p-16 relative overflow-hidden">
    
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-sky-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
    
    <div class="flex flex-col md:flex-row items-center justify-between relative z-10">
      <!-- Text Content -->
      <div class="text-left max-w-xl mb-10 md:mb-0">
        <!-- Welcome Badge -->
        <div class="inline-flex items-center gap-2 bg-white border border-sky-200 rounded-full px-4 py-2 mb-6 shadow-md">
          <span class="text-2xl">👋</span>
          <span class="text-sky-700 font-semibold text-sm">Selamat Datang Kembali!</span>
        </div>
        
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
          Halo, <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00bcd4] to-[#7fdbff]">{{ Auth::user()->username }}</span>! 
        </h1>
        
        <p class="text-gray-700 text-lg leading-relaxed mb-8">
          "Kenali gejala lebih awal, dapatkan analisis cerdas, dan hidup lebih sehat bersama <span class="font-semibold text-sky-600">AsthmaCare</span>."
        </p>
        
        <!-- Quick Stats -->
        <div class="grid grid-cols-3 gap-4 mb-8 p-6 bg-white rounded-2xl shadow-lg">
          <div class="text-center">
            <p class="text-2xl font-bold text-sky-600">5+</p>
            <p class="text-xs text-gray-600">Fitur Utama</p>
          </div>
          <div class="text-center border-x border-gray-200">
            <p class="text-2xl font-bold text-emerald-600">24/7</p>
            <p class="text-xs text-gray-600">Akses Mudah</p>
          </div>
          <div class="text-center">
            <p class="text-2xl font-bold text-violet-600">100%</p>
            <p class="text-xs text-gray-600">Gratis</p>
          </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#" class="group bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center inline-flex items-center justify-center">
            Mulai Tes Sekarang
            <svg class="w-5 h-5 ml-2 group-hover:ml-3 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </a>
          <a href="#fitur" class="border-2 border-gray-300 text-gray-800 font-semibold px-8 py-4 rounded-xl hover:bg-white hover:border-gray-400 transition-all duration-300 text-center">
            Lihat Fitur
          </a>
        </div>
      </div>

      <!-- Image -->
      <div class="md:w-5/12 flex justify-center md:justify-end relative">
        <div class="relative animate-float">
          <img src="{{ asset('images/asmaorang.png') }}" alt="Pengguna Inhaler" class="w-80 md:w-96 drop-shadow-2xl">
          <!-- Decorative elements -->
          <div class="absolute -top-6 -right-6 w-20 h-20 bg-sky-400 rounded-full opacity-20 animate-ping"></div>
          <div class="absolute -bottom-6 -left-6 w-16 h-16 bg-blue-400 rounded-full opacity-20 animate-ping" style="animation-delay: 0.5s;"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fitur Utama - IMPROVED -->
<section id="fitur" class="bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] py-20">
  <div class="max-w-7xl mx-auto px-8 md:px-12">
    <div class="text-center mb-16">
      <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">LAYANAN KAMI</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fitur Utama AsthmaCare</h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">Solusi lengkap untuk membantu Anda mengelola asma dengan lebih baik</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      
      <!-- Card 1 -->
      <a href="#" class="group relative bg-white rounded-3xl p-8 flex flex-col transition-all duration-500 hover:shadow-2xl hover:-translate-y-3 overflow-hidden">
        <div class="absolute top-6 right-6 w-10 h-10 bg-sky-100 group-hover:bg-white/90 rounded-full flex items-center justify-center font-bold text-sky-600 transition-all duration-300">
          01
        </div>
        
        <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
        
        <div class="relative z-10">
          <div class="bg-sky-50 group-hover:bg-white/20 rounded-2xl p-6 mb-6 transition-all duration-500 transform group-hover:scale-110 inline-block">
            <img src="{{ asset('images/inhaler.png') }}" class="w-16 h-16 transition-transform duration-500 group-hover:rotate-12" alt="Tes Asma">
          </div>
          <h3 class="font-bold text-xl mb-3 text-gray-900 group-hover:text-white transition-colors duration-300">Tes Kontrol Asma</h3>
          <p class="text-gray-600 group-hover:text-white/90 text-base leading-relaxed transition-colors duration-300 mb-4">Ukur tingkat kontrol asma Anda dengan kuesioner ACT (Asthma Control Test).</p>
          
          <ul class="space-y-2 mb-6">
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Hanya 5 menit
            </li>
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Hasil instan
            </li>
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Gratis tanpa batas
            </li>
          </ul>
          
          <div class="flex items-center text-sky-600 group-hover:text-white font-semibold text-sm">
            Mulai Tes <span class="ml-2 group-hover:ml-3 transition-all">→</span>
          </div>
        </div>
        
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-sky-200 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
      </a>

      <!-- Card 2 -->
      <a href="#" class="group relative bg-white rounded-3xl p-8 flex flex-col transition-all duration-500 hover:shadow-2xl hover:-translate-y-3 overflow-hidden">
        <div class="absolute top-6 right-6 w-10 h-10 bg-emerald-100 group-hover:bg-white/90 rounded-full flex items-center justify-center font-bold text-emerald-600 transition-all duration-300">
          02
        </div>
        
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-400 to-teal-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
        
        <div class="relative z-10">
          <div class="bg-emerald-50 group-hover:bg-white/20 rounded-2xl p-6 mb-6 transition-all duration-500 transform group-hover:scale-110 inline-block">
            <img src="{{ asset('images/perisai.png') }}" class="w-16 h-16 transition-transform duration-500 group-hover:rotate-12" alt="Saran Kesehatan">
          </div>
          <h3 class="font-bold text-xl mb-3 text-gray-900 group-hover:text-white transition-colors duration-300">Saran Kesehatan</h3>
          <p class="text-gray-600 group-hover:text-white/90 text-base leading-relaxed transition-colors duration-300 mb-4">Dapatkan rekomendasi dan tips berdasarkan kondisi asma Anda untuk menjaga kesehatan paru-paru optimal.</p>
          
          <ul class="space-y-2 mb-6">
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Tips harian
            </li>
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Panduan Gaya Hidup
            </li>
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Rekomendasi Makanan
            </li>
          </ul>
          
          <div class="flex items-center text-emerald-600 group-hover:text-white font-semibold text-sm">
            Lihat Saran <span class="ml-2 group-hover:ml-3 transition-all">→</span>
          </div>
        </div>
        
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-emerald-200 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
      </a>

      <!-- Card 3 -->
      <a href="#" class="group relative bg-white rounded-3xl p-8 flex flex-col transition-all duration-500 hover:shadow-2xl hover:-translate-y-3 overflow-hidden">
        <div class="absolute top-6 right-6 w-10 h-10 bg-violet-100 group-hover:bg-white/90 rounded-full flex items-center justify-center font-bold text-violet-600 transition-all duration-300">
          03
        </div>
        
        <div class="absolute inset-0 bg-gradient-to-br from-violet-400 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
        
        <div class="relative z-10">
          <div class="bg-violet-50 group-hover:bg-white/20 rounded-2xl p-6 mb-6 transition-all duration-500 transform group-hover:scale-110 inline-block">
            <img src="{{ asset('images/dokter.png') }}" class="w-16 h-16 transition-transform duration-500 group-hover:rotate-12" alt="Artikel Edukasi">
          </div>
          <h3 class="font-bold text-xl mb-3 text-gray-900 group-hover:text-white transition-colors duration-300">Artikel & Edukasi</h3>
          <p class="text-gray-600 group-hover:text-white/90 text-base leading-relaxed transition-colors duration-300 mb-4">Akses perpustakaan artikel kesehatan dan informasi informasi mengenai Asma.</p>
          
          <ul class="space-y-2 mb-6">
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Informasi Terpercaya
            </li>
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Artikel harian
            </li>
            <li class="flex items-center text-sm text-gray-600 group-hover:text-white/80 transition-colors">
              <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              Informasi Terbaru
            </li>
          </ul>
          
          <div class="flex items-center text-violet-600 group-hover:text-white font-semibold text-sm">
            Baca Artikel <span class="ml-2 group-hover:ml-3 transition-all">→</span>
          </div>
        </div>
        
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-violet-200 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
      </a>

    </div>
  </div>
</section>

<!-- Tahukah Kamu - NEW CAROUSEL WITH ALTERNATING LAYOUT -->
<section id="tahukah-kamu" class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-8 md:px-12">
    
    <!-- Header -->
    <div class="mb-12">
      <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-100 to-orange-100 px-5 py-3 rounded-full">
        <span class="text-3xl">💡</span>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Tahukah Kamu?</h2>
      </div>
      <p class="text-gray-600 mt-4 text-lg">Fakta menarik seputar asma yang perlu kamu ketahui</p>
    </div>

    <!-- Carousel Container -->
    <div class="relative">
      <!-- Slides Container -->
      <div id="carousel-container" class="overflow-hidden">
        <div id="carousel-slides" class="transition-transform duration-700 ease-in-out">
          
          <!-- Slide 1 - Text Left, Image Right -->
          <div class="carousel-slide min-w-full">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 bg-gradient-to-br from-cyan-50 to-blue-50 rounded-3xl p-8 md:p-12 shadow-xl">
              <!-- Text Content -->
              <div class="flex-1 order-2 md:order-1">
                <div class="inline-block bg-cyan-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                  Fakta #1
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                  Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
                </h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                  Banyak orang sulit membedakan gejala asma dengan flu biasa. Gejala asma biasanya berlangsung lebih lama dan memburuk pada malam hari atau saat beraktivitas. Sementara flu biasa cenderung membaik dalam 7-10 hari.
                </p>
                <ul class="space-y-3 mb-6">
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Asma: Mengi, sesak napas berulang, memburuk malam hari</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-cyan-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Flu: Demam, nyeri tubuh, membaik dalam seminggu</span>
                  </li>
                </ul>
                <a href="#" class="inline-flex items-center text-cyan-600 font-semibold hover:text-cyan-700 transition-colors">
                  Baca Selengkapnya 
                  <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                  </svg>
                </a>
              </div>
              
              <!-- Image -->
              <div class="flex-1 order-1 md:order-2">
                <div class="relative">
                  <div class="absolute inset-0 bg-cyan-400 rounded-3xl opacity-20 blur-2xl"></div>
                  <div class="relative bg-white rounded-3xl p-6 shadow-2xl">
                    <div class="w-full h-80 bg-gradient-to-br from-cyan-100 to-blue-200 rounded-2xl flex items-center justify-center">
                      <img src="{{ asset('images/artikel1.png') }}" alt="Gejala Asma" class="w-full h-full object-cover rounded-2xl">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 - Image Left, Text Right -->
          <div class="carousel-slide min-w-full">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 bg-gradient-to-br from-rose-50 to-pink-50 rounded-3xl p-8 md:p-12 shadow-xl">
              <!-- Image -->
              <div class="flex-1">
                <div class="relative">
                  <div class="absolute inset-0 bg-rose-400 rounded-3xl opacity-20 blur-2xl"></div>
                  <div class="relative bg-white rounded-3xl p-6 shadow-2xl">
                    <div class="w-full h-80 bg-gradient-to-br from-rose-100 to-pink-200 rounded-2xl flex items-center justify-center">
                      <img src="{{ asset('images/artikel2.png') }}" alt="Pertolongan Pertama" class="w-full h-full object-cover rounded-2xl">
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Text Content -->
              <div class="flex-1">
                <div class="inline-block bg-rose-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                  Fakta #2
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                  5 Tanda Awal Asma yang Sering Disepelekan
                </h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                  Banyak penderita asma tidak menyadari gejala awal yang mereka alami. Mengenali tanda-tanda ini sejak dini dapat membantu penanganan yang lebih cepat dan efektif.
                </p>
                <ul class="space-y-3 mb-6">
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-rose-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Napas berbunyi (mengi) saat bernapas</span>
                  </li>
                </ul>
                <a href="#" class="inline-flex items-center text-rose-600 font-semibold hover:text-rose-700 transition-colors">
                  Baca Selengkapnya 
                  <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Slide 3 - Text Left, Image Right -->
          <div class="carousel-slide min-w-full">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 bg-gradient-to-br from-emerald-50 to-teal-50 rounded-3xl p-8 md:p-12 shadow-xl">
              <!-- Text Content -->
              <div class="flex-1 order-2 md:order-1">
                <div class="inline-block bg-emerald-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                  Fakta #3
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                  Olahraga yang Aman untuk Penderita Asma
                </h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                  Memiliki asma bukan berarti tidak bisa berolahraga! Dengan pilihan olahraga yang tepat dan persiapan yang baik, penderita asma tetap bisa aktif dan sehat.
                </p>
                <ul class="space-y-3 mb-6">
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Berenang: olahraga paling direkomendasikan</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Yoga: melatih pernapasan dengan lembut</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-emerald-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Jalan santai: aktivitas ringan yang efektif</span>
                  </li>
                </ul>
                <a href="#" class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors">
                  Baca Selengkapnya 
                  <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                  </svg>
                </a>
              </div>
              
              <!-- Image -->
              <div class="flex-1 order-1 md:order-2">
                <div class="relative">
                  <div class="absolute inset-0 bg-emerald-400 rounded-3xl opacity-20 blur-2xl"></div>
                  <div class="relative bg-white rounded-3xl p-6 shadow-2xl">
                    <div class="w-full h-80 bg-gradient-to-br from-emerald-100 to-teal-200 rounded-2xl flex items-center justify-center">
                      <img src="{{ asset('images/artikel3.png') }}" alt="Olahraga" class="w-full h-full object-cover rounded-2xl">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4 - Image Left, Text Right -->
          <div class="carousel-slide min-w-full">
            <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12 bg-gradient-to-br from-violet-50 to-purple-50 rounded-3xl p-8 md:p-12 shadow-xl">
              <!-- Image -->
              <div class="flex-1">
                <div class="relative">
                  <div class="absolute inset-0 bg-violet-400 rounded-3xl opacity-20 blur-2xl"></div>
                  <div class="relative bg-white rounded-3xl p-6 shadow-2xl">
                    <div class="w-full h-80 bg-gradient-to-br from-violet-100 to-purple-200 rounded-2xl flex items-center justify-center">
                      <img src="{{ asset('images/artikel3.png') }}" alt="makanan" class="w-full h-full object-cover rounded-2xl">
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Text Content -->
              <div class="flex-1">
                <div class="inline-block bg-violet-500 text-white px-4 py-1 rounded-full text-sm font-semibold mb-4">
                  Fakta #4
                </div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                  Makanan yang Baik dan Buruk untuk Asma
                </h3>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                  Pola makan yang tepat dapat membantu mengontrol gejala asma. Beberapa makanan dapat membantu mengurangi inflamasi, sementara yang lain justru dapat memicu serangan.
                </p>
                <ul class="space-y-3 mb-6">
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-violet-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Baik: Buah-buahan, sayuran hijau, ikan omega-3</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-violet-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Hindari: Makanan olahan, MSG, pengawet</span>
                  </li>
                  <li class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-violet-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-gray-700">Vitamin D membantu fungsi paru-paru</span>
                  </li>
                </ul>
                <a href="#" class="inline-flex items-center text-violet-600 font-semibold hover:text-violet-700 transition-colors">
                  Baca Selengkapnya 
                  <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                  </svg>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Navigation Buttons -->
      <button id="prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white rounded-full p-4 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-110 z-10">
        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>
      
      <button id="next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white rounded-full p-4 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-110 z-10">
        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </button>

      <!-- Indicators -->
      <div class="flex justify-center gap-3 mt-8">
        <button class="indicator w-3 h-3 rounded-full bg-sky-600 transition-all duration-300" data-slide="0"></button>
        <button class="indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="1"></button>
        <button class="indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="2"></button>
        <button class="indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 transition-all duration-300" data-slide="3"></button>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials - IMPROVED -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-8 md:px-12">
    <div class="text-center mb-16">
      <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">TESTIMONI</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Apa Kata Pengguna Kami</h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">Ribuan pengguna telah merasakan manfaatnya</p>
    </div>

    <!-- Main Featured Testimonial -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row items-center justify-center gap-12 mx-auto max-w-6xl bg-gradient-to-br from-white to-sky-50 rounded-3xl shadow-2xl p-10 md:p-12 border border-sky-100">
        <!-- Avatar -->
        <div class="flex-shrink-0 flex justify-center relative">
          <img src="{{ asset('images/orang.png') }}" alt="User" class="w-56 h-56 object-cover rounded-full shadow-xl ring-4 ring-sky-200">
          <!-- Verified Badge -->
          <div class="absolute bottom-2 right-2 bg-green-500 rounded-full p-2 shadow-lg">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
          </div>
        </div>

        <!-- Isi Testimoni -->
        <div class="text-left flex flex-col justify-center flex-1">
          <div class="text-yellow-400 text-4xl mb-4">★★★★★</div>
          <p class="text-gray-700 text-xl md:text-2xl leading-relaxed mb-6 italic">
            "Aplikasi ini sangat membantu saya mengenali gejala asma lebih cepat. Analisisnya jelas, dan saya bisa langsung tahu kapan harus ke dokter."
          </p>
          <div class="flex items-center gap-4">
            <div>
              <p class="text-gray-900 font-bold text-lg">Siti Nurhaliza</p>
              <p class="text-gray-500 text-sm">Pengguna Aktif</p>
            </div>
            <div class="flex-1 border-l-2 border-sky-200 pl-4">
              <p class="text-sky-600 font-semibold text-sm">✓ Verified User</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Testimonial 1 -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center text-sky-600 font-bold text-lg">
            AR
          </div>
          <div>
            <p class="font-bold text-gray-900">Ahmad Rizki</p>
            <div class="text-yellow-400 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed italic">"Interface-nya sangat user-friendly. Bahkan orangtua saya yang gaptek bisa menggunakannya dengan mudah!"</p>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 font-bold text-lg">
            DP
          </div>
          <div>
            <p class="font-bold text-gray-900">Dewi Permata</p>
            <div class="text-yellow-400 text-sm">★★★★★</div>
          </div>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed italic">"Fitur monitoring asma-nya membantu saya track kondisi harian. Sekarang lebih jarang kambuh!"</p>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 border border-gray-100">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 bg-violet-100 rounded-full flex items-center justify-center text-violet-600 font-bold text-lg">
            BW
          </div>
          <div>
            <p class="font-bold text-gray-900">Budi Wijaya</p>
            <div class="text-yellow-400 text-sm">★★★★☆</div>
          </div>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed italic">"Artikel edukasinya sangat informatif. Saya jadi lebih paham cara mengelola asma dengan benar."</p>
      </div>
    </div>
  </div>
</section>

<!-- Floating Animation CSS -->
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

<!-- Carousel JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const slidesContainer = document.getElementById('carousel-slides');
  const slides = document.querySelectorAll('.carousel-slide');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  const indicators = document.querySelectorAll('.indicator');
  
  let currentSlide = 0;
  const totalSlides = slides.length;
  let autoPlayInterval;

  function goToSlide(n) {
    currentSlide = (n + totalSlides) % totalSlides;
    slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    // Update indicators
    indicators.forEach((indicator, index) => {
      if (index === currentSlide) {
        indicator.classList.remove('bg-gray-300');
        indicator.classList.add('bg-sky-600', 'w-8');
      } else {
        indicator.classList.remove('bg-sky-600', 'w-8');
        indicator.classList.add('bg-gray-300');
      }
    });
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function prevSlide() {
    goToSlide(currentSlide - 1);
  }

  function startAutoPlay() {
    autoPlayInterval = setInterval(nextSlide, 5000); // Auto slide every 5 seconds
  }

  function stopAutoPlay() {
    clearInterval(autoPlayInterval);
  }

  // Event Listeners
  nextBtn.addEventListener('click', () => {
    nextSlide();
    stopAutoPlay();
    startAutoPlay(); // Restart auto play after manual control
  });

  prevBtn.addEventListener('click', () => {
    prevSlide();
    stopAutoPlay();
    startAutoPlay();
  });

  // Indicator clicks
  indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      goToSlide(index);
      stopAutoPlay();
      startAutoPlay();
    });
  });

  // Pause auto play on hover
  slidesContainer.addEventListener('mouseenter', stopAutoPlay);
  slidesContainer.addEventListener('mouseleave', startAutoPlay);

  // Start auto play
  startAutoPlay();

  // Make slides display flex
  slidesContainer.style.display = 'flex';
});
</script>

@endsection 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
