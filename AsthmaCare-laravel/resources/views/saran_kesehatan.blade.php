@extends('layout.app')

@section('title', 'Saran Kesehatan')

@section('content')

{{-- Navbar tampil sesuai status login --}}
    @auth
        <x-navbar /> {{-- Navbar setelah login --}}
    @else
        <x-navbar_index /> {{-- Navbar sebelum login --}}
    @endauth

<!-- Kontainer utama -->
<div class="w-full min-h-screen bg-gradient-to-b from-gray-50 via-white to-gray-100 py-16 relative overflow-hidden">
  
  <!-- Decorative elements - lebih subtle -->
  <div class="absolute top-10 left-5 w-72 h-72 bg-green-200/10 rounded-full blur-3xl"></div>
  <div class="absolute top-96 right-10 w-96 h-96 bg-yellow-200/10 rounded-full blur-3xl"></div>
  <div class="absolute bottom-32 left-1/3 w-80 h-80 bg-red-200/10 rounded-full blur-3xl"></div>

  <!-- Wrapper konten dengan padding konsisten -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16 relative z-10">

    <!-- HEADER dengan desain lebih balanced -->
    <section class="bg-white rounded-[2rem] shadow-2xl p-8 md:p-12 flex flex-col md:flex-row justify-between items-center gap-10 relative overflow-hidden border-2 border-gray-100 hover:border-teal-200 transition-all duration-500 hover:shadow-3xl">
      
      <!-- Gradient accent line -->
      <div class="absolute top-0 left-0 right-0 h-2 bg-gradient-to-r from-green-400 via-yellow-400 to-red-400 rounded-t-[2rem]"></div>
      
      <div class="text-center md:text-left md:flex-1 relative z-10">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2.5 mb-5 px-6 py-3 bg-gradient-to-r from-cyan-500 to-[#12E4FF] text-white font-bold rounded-full shadow-xl transform hover:scale-105 transition-transform">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
          </svg>
          <span class="text-base">Panduan Kesehatan Terpercaya</span>
        </div>
        
        <!-- Title dengan spacing lebih baik -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 leading-tight mb-5">
          Rekomendasi & Saran
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-[#12E4FF]">Kesehatan Asma</span>
        </h1>
        
        <!-- Description -->
        <p class="text-gray-600 text-lg md:text-xl leading-relaxed max-w-2xl">
          Temukan gaya hidup, makanan, dan olahraga yang sesuai dengan kondisi asma Anda.
        </p>
        
        <div class="inline-flex items-center gap-2 mt-4 text-teal-700 font-bold text-base">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"/>
          </svg>
          <span>Cocokkan dengan hasil tes risiko Anda</span>
        </div>
      </div>
      
      <div class="relative flex-shrink-0">
        <div class="absolute inset-0 bg-gradient-to-tr from-teal-100/50 to-emerald-100/50 rounded-full blur-3xl"></div>
        <img src="{{ asset('images/sarankesehatan.png') }}" alt="Ilustrasi Artikel" 
             class="w-64 md:w-80 lg:w-96 object-contain relative z-10 drop-shadow-2xl">
      </div>
    </section>

    <!-- CARD RISIKO dengan konsistensi warna lebih baik -->
    <section class="space-y-16">
      
      <!-- Risiko Rendah -->
      <div class="group relative transform hover:-translate-y-2 transition-all duration-500">
        <!-- Glow effect -->
        <div class="absolute -inset-0.5 bg-gradient-to-r from-green-400 to-emerald-500 rounded-[2rem] blur-xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
        
        <div class="relative bg-white rounded-[2rem] shadow-2xl overflow-hidden border-2 border-green-300 group-hover:border-green-400 transition-all duration-300">
          
          <!-- Header dengan warna konsisten -->
          <div class="bg-gradient-to-br from-green-400/90 to-emerald-500/90 px-8 py-7 flex items-center gap-5">
            
            <!-- Icon container -->
            <div class="bg-white rounded-2xl p-4 shadow-xl group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
              <svg class="w-9 h-9 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
              </svg>
            </div>
            
            <div class="flex-1">
              <h2 class="text-white font-black text-3xl mb-2 drop-shadow-lg">
                Risiko Rendah
              </h2>
              <div class="inline-flex items-center gap-2 bg-white/95 backdrop-blur-sm px-5 py-2 rounded-full shadow-md">
                <div class="w-2.5 h-2.5 bg-green-500 rounded-full animate-pulse"></div>
                <span class="text-base font-bold text-green-800">Asma Terkontrol</span>
              </div>
            </div>
          </div>
          
          <!-- Content dengan background konsisten -->
          <div class="p-8 md:p-10 space-y-10 bg-gradient-to-b from-green-50/30 via-white to-white">
            <x-card 
              title="Gaya Hidup"
              :list="[
                'Hindari rokok dan asap rokok.',
                'Rutin cek kesehatan 6-12 bulan sekali.',
                'Kelola stres dengan baik (meditasi, tidur cukup).',
                'Minum air putih.',
                'Hindari debu, bulu hewan, polusi berlebihan.',
                'Hindari minuman bersoda atau terlalu dingin.'
              ]"
              image="/images/hijau1.png"
            />

            <x-card 
              title="Makanan yang disarankan"
              :list="[
                'Buah & sayur segar (apel, brokoli, bayam, wortel).',
                'Ikan beromega-3 (salmon, tuna).',
                'Makanan tinggi antioksidan (berry, alpukat).'
              ]"
              image="/images/hijau2.png"
            />

            <x-card 
              title="Olahraga yang disarankan"
              :list="[
                'Jalan santai, bersepeda ringan.',
                'Yoga atau pilates.',
                'Renang (aman untuk paru-paru).'
              ]"
              image="/images/hijau3.png"
            />
          </div>
        </div>
      </div>

      <!-- Risiko Sedang -->
      <div class="group relative transform hover:-translate-y-2 transition-all duration-500">
        <!-- Glow effect -->
        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-[2rem] blur-xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
        
        <div class="relative bg-white rounded-[2rem] shadow-2xl overflow-hidden border-2 border-yellow-300 group-hover:border-yellow-400 transition-all duration-300">
          
          <!-- Header dengan warna konsisten -->
          <div class="bg-gradient-to-br from-yellow-400/90 to-orange-500/90 px-8 py-7 flex items-center gap-5">
            
            <!-- Icon container -->
            <div class="bg-white rounded-2xl p-4 shadow-xl group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
              <svg class="w-9 h-9 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"/>
              </svg>
            </div>
            
            <div class="flex-1">
              <h2 class="text-white font-black text-3xl mb-2 drop-shadow-lg">
                Risiko Sedang
              </h2>
              <div class="inline-flex items-center gap-2 bg-white/95 backdrop-blur-sm px-5 py-2 rounded-full shadow-md">
                <div class="w-2.5 h-2.5 bg-orange-500 rounded-full animate-pulse"></div>
                <span class="text-base font-bold text-orange-800">Perlu Perhatian Khusus</span>
              </div>
            </div>
          </div>
          
          <!-- Content dengan background konsisten -->
          <div class="p-8 md:p-10 space-y-10 bg-gradient-to-b from-yellow-50/30 via-white to-white">
            <x-card 
              title="Gaya Hidup"
              :list="[
                'Cek ke dokter setiap 3–6 bulan.',
                'Gunakan masker bila diperlukan.',
                'Catat pola kambuh (jam, pencetus).',
                'Hindari aktivitas terlalu berat.',
                'Hindari olahraga di udara dingin tanpa pemanasan.',
                'Hindari makanan cepat saji tinggi lemak.'
              ]"
              image="/images/kuning1.png"
            />

            <x-card 
              title="Makanan yang disarankan"
              :list="[
                'Sup hangat (sayur, ayam tanpa lemak).',
                'Jahe, kunyit (bisa dimasak/minuman).',
                'Buah kaya vitamin C (jeruk, kiwi, pepaya).'
              ]"
              image="/images/kuning2.png"
            />

            <x-card 
              title="Olahraga yang disarankan"
              :list="[
                'Jalan kaki 20–30 menit.',
                'Senam pernapasan ringan.',
                'Stretching rutin.'
              ]"
              image="/images/kuning3.png"
            />
          </div>
        </div>
      </div>

      <!-- Risiko Tinggi -->
      <div class="group relative transform hover:-translate-y-2 transition-all duration-500">
        <!-- Glow effect -->
        <div class="absolute -inset-0.5 bg-gradient-to-r from-red-400 to-pink-500 rounded-[2rem] blur-xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
        
        <div class="relative bg-white rounded-[2rem] shadow-2xl overflow-hidden border-2 border-red-300 group-hover:border-red-400 transition-all duration-300">
          
          <!-- Header dengan warna konsisten -->
          <div class="bg-gradient-to-br from-red-400/90 to-pink-500/90 px-8 py-7 flex items-center gap-5">
            
            <!-- Icon container -->
            <div class="bg-white rounded-2xl p-4 shadow-xl group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
              <svg class="w-9 h-9 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"/>
              </svg>
            </div>
            
            <div class="flex-1">
              <h2 class="text-white font-black text-3xl mb-2 drop-shadow-lg">
                Risiko Tinggi
              </h2>
              <div class="inline-flex items-center gap-2 bg-white/95 backdrop-blur-sm px-5 py-2 rounded-full shadow-md">
                <div class="w-2.5 h-2.5 bg-red-500 rounded-full animate-pulse"></div>
                <span class="text-base font-bold text-red-800">Perlu Pengawasan Ketat</span>
              </div>
            </div>
          </div>
          
          <!-- Content dengan background konsisten -->
          <div class="p-8 md:p-10 space-y-10 bg-gradient-to-b from-red-50/30 via-white to-white">
            <x-card 
              title="Gaya Hidup"
              :list="[
                'Wajib kontrol ke dokter 1–3 bulan sekali.',
                'Gunakan obat sesuai resep tanpa terlewat.',
                'Hindari paparan asap, debu, polusi, bulu hewan.',
                'Selalu siapkan inhaler darurat.',
                'Hindari begadang & jaga kualitas tidur.',
                'Segera ke IGD bila sesak semakin parah.'
              ]"
              image="/images/merah1.png"
            />

            <x-card 
              title="Makanan yang disarankan"
              :list="[
                'Makanan hangat & mudah dicerna (sup, bubur).',
                'Hindari makanan/minuman pemicu alergi.',
                'Perbanyak buah antioksidan tinggi (jeruk, alpukat, beri).',
                'Air putih hangat (hindari dingin/es).'
              ]"
              image="/images/merah2.png"
            />

            <x-card 
              title="Olahraga yang disarankan"
              :list="[
                'Senam pernapasan ringan.',
                'Yoga ringan khusus pernapasan.',
                'Hindari olahraga berat tanpa izin dokter.'
              ]"
              image="/images/merah3.png"
            />
          </div>
        </div>
      </div>
    </section>

  </div>
</div>

<!-- Custom CSS untuk animasi -->
<style>
@keyframes float {
  0%, 100% {
    transform: translateY(0px) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(2deg);
  }
}

.animate-float {
  animation: float 5s ease-in-out infinite;
}

html {
  scroll-behavior: smooth;
}

/* Entrance animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

section {
  animation: fadeInUp 0.8s ease-out backwards;
}

.group:nth-child(1) { animation-delay: 0.2s; }
.group:nth-child(2) { animation-delay: 0.3s; }
.group:nth-child(3) { animation-delay: 0.4s; }

/* Custom shadow */
.shadow-3xl {
  box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.3);
}
</style>

@endsection