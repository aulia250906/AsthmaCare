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
  <x-home-fitur />

<!-- Tentang Kami -->
  <x-home-about />

<!-- Kenapa Memilih Kami - IMPROVED -->
  <x-home-why />

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
      
      @foreach ($reviews as $review)
      <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
          
          <div class="flex items-center gap-3 mb-4">

              <!-- Initial Avatar -->
              @php
                  $initial = strtoupper(substr($review->name, 0, 1));
                  $colorClasses = ['sky', 'emerald', 'violet', 'rose', 'amber', 'cyan'];
                  $color = $colorClasses[$loop->index % count($colorClasses)];
              @endphp

              <div class="w-12 h-12 bg-{{ $color }}-100 rounded-full flex items-center justify-center text-{{ $color }}-600 font-bold text-lg">
                  {{ $initial }}
              </div>

              <div>
                  <p class="font-bold text-gray-900">{{ $review->name }}</p>

                  <!-- Rating bintang -->
                  <div class="text-yellow-400 text-sm">
                      @for ($i = 1; $i <= 5; $i++)
                          {!! $i <= $review->rating ? '★' : '☆' !!}
                      @endfor
                  </div>
              </div>
          </div>

          <p class="text-gray-600 text-sm leading-relaxed italic">
              "{{ $review->comment }}"
          </p>
      </div>
@endforeach

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