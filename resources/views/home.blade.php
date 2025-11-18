@extends('layout.app') 

@section('title', 'Landing Page')

<!-- Navbar Index -->
@include('components.navbar')

<!-- Hero Section - IMPROVED -->
<section id="beranda" class="relative max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between mt-32 md:mt-20 px-8 md:px-12 mb-20 overflow-hidden">
  
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
    <a href="#" class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-8 py-4 rounded-xl shadow-lg hover:from-[#0097a7] hover:to-[#55c6ff] hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center">Mulai Tes Sekarang</a>
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
<section id="fitur" class="bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] py-20">
  <div class="max-w-7xl mx-auto px-8 md:px-12">
    <div class="text-center mb-16">
      <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">LAYANAN KAMI</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fitur Utama AsthmaCare</h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">Solusi lengkap untuk membantu Anda mengelola asma dengan lebih baik</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      
      <!-- Card 1 -->
      <a href="/pertanyaan" class="group relative bg-white rounded-3xl p-8 flex flex-col transition-all duration-500 hover:-translate-y-3 overflow-hidden border-2 border-transparent hover:border-cyan-400">
        <!-- Badge Number -->
        <div class="absolute top-6 right-6 w-10 h-10 bg-sky-100 group-hover:bg-white/90 rounded-full flex items-center justify-center font-bold text-sky-600 transition-all duration-300">
          01
        </div>
        
        <!-- Gradient background on hover -->
        <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
        
        <!-- Content -->
        <div class="relative z-10">
          <div class="bg-sky-50 group-hover:bg-white/20 rounded-2xl p-6 mb-6 transition-all duration-500 transform group-hover:scale-110 inline-block">
            <img src="{{ asset('images/inhaler.png') }}" class="w-16 h-16 transition-transform duration-500 group-hover:rotate-12" alt="Tes Asma">
          </div>
          <h3 class="font-bold text-xl mb-3 text-gray-900 group-hover:text-white transition-colors duration-300">Tes Kontrol Asma</h3>
          <p class="text-gray-600 group-hover:text-white/90 text-base leading-relaxed transition-colors duration-300 mb-4">Ukur tingkat kontrol asma Anda dengan kuesioner ACT (Asthma Control Test).</p>
          
          <!-- Features list -->
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
      <a href="/saran" class="group relative bg-white rounded-3xl p-8 flex flex-col transition-all duration-500 hover:-translate-y-3 overflow-hidden border-2 border-transparent hover:border-cyan-400">
        <div class="absolute top-6 right-6 w-10 h-10 bg-sky-100 group-hover:bg-white/90 rounded-full flex items-center justify-center font-bold text-sky-600 transition-all duration-300">
          02
        </div>
        
        <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
        
        <div class="relative z-10">
          <div class="bg-sky-50 group-hover:bg-white/20 rounded-2xl p-6 mb-6 transition-all duration-500 transform group-hover:scale-110 inline-block">
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
          
                  <div class="flex items-center text-sky-600 group-hover:text-white font-semibold text-sm">
            Lihat Saran <span class="ml-2 group-hover:ml-3 transition-all">→</span>
          </div>
        </div>
        
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-emerald-200 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
      </a>

      <!-- Card 3 -->
      <a href="/artikel" class="group relative bg-white rounded-3xl p-8 flex flex-col transition-all duration-500 hover:-translate-y-3 overflow-hidden border-2 border-transparent hover:border-cyan-400">
        <div class="absolute top-6 right-6 w-10 h-10 bg-sky-100 group-hover:bg-white/90 rounded-full flex items-center justify-center font-bold text-sky-600 transition-all duration-300">
          03
        </div>
        
        <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
            
        <div class="relative z-10">
          <div class="bg-sky-50 group-hover:bg-white/20 rounded-2xl p-6 mb-6 transition-all duration-500 transform group-hover:scale-110 inline-block">
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
          
          <div class="flex items-center text-sky-600 group-hover:text-white font-semibold text-sm">
            Baca Artikel <span class="ml-2 group-hover:ml-3 transition-all">→</span>
          </div>
        </div>
        
        <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-violet-200 rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
      </a>

    </div>
  </div>
</section>

<!-- Tentang Kami -->
<section class="max-w-6xl mx-auto px-6 md:px-0 mt-16 flex flex-col md:flex-row items-center justify-between">
  <div class="max-w-md md:mr-12" data-aos="zoom-in-up">
    <h2 class="text-2xl md:text-4xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
    <p class="text-xl text-gray-700 mb-6">
      AsthmaCare hadir untuk membantu Anda mengenali risiko asma lebih dini, mengambil keputusan tepat, dan hidup lebih sehat.
    </p>
    <p class="text-xl text-gray-700 mb-6">
      Tujuan kami adalah menyediakan alat dan sumber daya yang mudah digunakan untuk meningkatkan kualitas hidup pengguna.
    </p>
    <a href="#" class="inline-block bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-6 py-3 rounded-lg shadow hover:from-[#0097a7] hover:to-[#55c6ff] transition">Pelajari Lebih Lanjut</a>
  </div>
  <div class="mt-10 md:mt-0 md:w-1/2 flex justify-center md:justify-end" data-aos="zoom-in-up">
    <img src="{{ asset('images/asmaorang.png') }}" alt="Tentang Kami" class="w-72 md:w-80">
  </div>
</section>


<!-- Kenapa Memilih Kami - IMPROVED -->
<section class="bg-white py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-8 md:px-12">
    <div class="text-center mb-16">
      <span class="inline-block bg-sky-100 text-sky-700 font-semibold px-4 py-2 rounded-full text-sm mb-4">KEUNGGULAN</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kenapa Memilih AsthmaCare?</h2>
      <p class="text-gray-600 text-lg max-w-2xl mx-auto">Platform terpercaya untuk pengelolaan asma modern</p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <div class="group bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] rounded-2xl p-8 transition-all duration-300 text-center border-2 border-transparent" data-aos="fade-right">
        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 transition-transform duration-300">
          <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8" alt="UI Icon">
        </div>
        <h3 class="font-bold text-lg text-gray-800 mb-2">Antarmuka Ramah Pengguna</h3>
        <p class="text-gray-600 text-sm">Desain intuitif dan mudah digunakan untuk semua usia</p>
      </div>
      
      <div class="group bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] rounded-2xl p-8 transition-all duration-300 text-center border-2 border-transparent" data-aos="fade-down-right">
        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 transition-transform duration-300">
          <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8" alt="Medis Icon">
        </div>
        <h3 class="font-bold text-lg text-gray-800 mb-2">Tes yang Didukung Medis</h3>
        <p class="text-gray-600 text-sm">Berbasis standar ACT yang diakui secara internasional</p>
      </div>
      
      <div class="group bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] rounded-2xl p-8 transition-all duration-300 text-center border-2 border-transparent" data-aos="fade-down-left">
        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 transition-transform duration-300">
          <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8" alt="Akses Icon">
        </div>
        <h3 class="font-bold text-lg text-gray-800 mb-2">Akses Kapan Saja</h3>
        <p class="text-gray-600 text-sm">Tersedia 24/7 di semua perangkat Anda</p>
      </div>
      
      <div class="group bg-gradient-to-br from-[#F3FDFF] to-[#E0F7FF] rounded-2xl p-8 transition-all duration-300 text-center border-2 border-transparent" data-aos="fade-left">
        <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4 transition-transform duration-300">
          <img src="{{ asset('images/centang2.png') }}" class="w-8 h-8" alt="Privasi Icon">
        </div>
        <h3 class="font-bold text-lg text-gray-800 mb-2">Privasi Data Terjamin</h3>
        <p class="text-gray-600 text-sm">Enkripsi end-to-end untuk keamanan maksimal</p>
      </div>
      
    </div>
  </div>
</section>


<!-- Testimonials - IMPROVED -->
<section class="py-24">
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
              <p class="text-gray-500 text-sm">Pengguna Aktif </p>
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
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
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
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
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
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
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