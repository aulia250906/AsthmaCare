@extends('layout.app')

@section('title', 'Hasil Tes Deteksi Gejala Asma')

@section('content')
@php
    // Ambil dari model HasilTes
    $riskLevel = $hasil->resiko ?? 'Tidak Diketahui';
    $score     = $hasil->score ?? 0;                  // 0–20
    $narrative = $hasil->narasi ?? 'Hasil narasi tidak tersedia.';

    // Lebar progress bar (min 5% supaya tetap kelihatan)
    $width     = max(5, min(($score / 20) * 100, 100));

    // Warna bar berdasarkan risiko
    $barColor  = $riskLevel === 'High' ? 'bg-red-500' : 'bg-green-500';

    // Judul text untuk risiko
    $riskTitle = $riskLevel === 'High'
                    ? 'Risiko Asma Tinggi'
                    : ($riskLevel === 'Low'
                        ? 'Risiko Asma Rendah'
                        : 'Risiko Asma');
@endphp

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .fade-in {
        animation: fadeIn 0.6s ease-out forwards;
    }
    .slide-in {
        animation: slideIn 0.6s ease-out forwards;
    }
    .hover-lift {
        transition: all 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .gradient-text {
        background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    button:focus, a:focus {
        outline: 3px solid #06b6d4;
        outline-offset: 2px;
    }
    * {
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

@auth
    <x-navbar />
@else
    <x-navbar_index />
@endauth

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 bg-gray-50 min-h-screen" role="main">
    
    <!-- Title Section -->
    <header class="text-center mb-10 lg:mb-14 fade-in">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-3 leading-tight">
            <span class="gradient-text">Selamat!</span> Anda telah menyelesaikan
        </h1>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-700 flex items-center justify-center gap-2 sm:gap-3 flex-wrap">
            tes deteksi gejala Asma 
            <span class="text-4xl lg:text-5xl" role="img" aria-label="celebrasi">🎉</span>
        </h2>
        <p class="text-gray-600 mt-3 text-sm sm:text-base">
            Berikut adalah rangkuman hasil analisis berdasarkan jawaban Anda.
        </p>
    </header>

    <!-- Info Cards -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6 mb-8 lg:mb-12 slide-in" aria-label="Informasi Tes">
        <!-- User Card -->
        <div class="bg-[#DBF5FF] rounded-2xl p-5 lg:p-6 flex items-center gap-4 shadow-md hover:shadow-xl hover-lift">
            <img src="{{ asset('images/user.png') }}" 
                 alt="Ikon pengguna" 
                 class="w-10 h-10 lg:w-12 lg:h-12"
                 loading="lazy">
            <div class="text-gray-800">
                <p class="text-xs sm:text-sm opacity-80 font-medium mb-1">Nama Responden</p>
                <p class="font-bold text-lg sm:text-xl lg:text-2xl">
                    {{ optional($hasil->user)->name ?? (auth()->user()->name ?? 'User') }}
                </p>
            </div>
        </div>

        <!-- Date Card -->
        <div class="bg-[#DBF5FF] rounded-2xl p-5 lg:p-6 flex items-center gap-4 shadow-md hover:shadow-xl hover-lift">
            <img src="{{ asset('images/kalender.png') }}" 
                 alt="Ikon kalender" 
                 class="w-10 h-10 lg:w-12 lg:h-12"
                 loading="lazy">
            <div class="text-gray-800">
                <p class="text-xs sm:text-sm opacity-80 font-medium mb-1">Tanggal Tes</p>
                <p class="font-bold text-lg sm:text-xl lg:text-2xl">
                    @if($hasil->tanggal_tes)
                        {{ $hasil->tanggal_tes->format('d/m/Y') }}
                    @else
                        {{ now()->format('d/m/Y') }}
                    @endif
                </p>
            </div>
        </div>
    </section>

    <!-- Risk Level Section -->
    <section class="bg-white rounded-3xl shadow-xl p-5 sm:p-6 lg:p-10 mb-8 lg:mb-12 fade-in border border-gray-100" 
             style="animation-delay: 0.2s"
             aria-labelledby="result-heading">
        <div class="text-center mb-6 lg:mb-8">
            <h3 id="result-heading" class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 mb-2">
                Hasil Analisis Anda
            </h3>
            <p class="text-sm sm:text-base text-gray-600">
                Berdasarkan jawaban yang telah Anda berikan
            </p>
            <p class="mt-2 text-xs sm:text-sm text-gray-500">
                Skor Risiko: <span class="font-semibold text-gray-800">{{ $score }}</span> dari 20  
                <span class="block mt-1">
                    Semakin tinggi skor, semakin besar indikasi risiko asma berdasarkan jawaban Anda.
                </span>
            </p>
        </div>
        
        <!-- Risk Indicator -->
        <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl p-5 sm:p-6 lg:p-8 border-2 border-red-200 mb-6" 
             role="alert" 
             aria-live="polite">
            <div class="flex items-center justify-center gap-3 mb-6 flex-wrap">
                <div class="w-12 h-12 lg:w-14 lg:h-14 
                            {{ $riskLevel === 'High' ? 'bg-red-500' : 'bg-emerald-500' }} 
                            rounded-full flex items-center justify-center flex-shrink-0 shadow-lg">
                    <svg class="w-7 h-7 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <h4 class="text-xl sm:text-2xl lg:text-3xl font-bold 
                           {{ $riskLevel === 'High' ? 'text-red-600' : 'text-emerald-700' }} 
                           text-center">
                    {{ $riskTitle }}
                </h4>
            </div>
            
            <!-- Risk Bar dengan width dinamis -->
            <div class="relative mb-6 lg:mb-8">
                <div class="w-full bg-gray-200 rounded-2xl h-6 sm:h-7 lg:h-8 overflow-hidden shadow-inner" 
                     role="img" 
                     aria-label="Grafik tingkat risiko asma {{ strtolower($riskTitle) }} dengan skor {{ $score }} dari 20">
                    <div class="{{ $barColor }} h-full relative transition-all duration-500" style="width: {{ $width }}%;">
                        <span class="absolute right-2 top-0 text-white font-bold text-xs sm:text-sm lg:text-base leading-6 sm:leading-7 lg:leading-8">
                            {{ $score }}/20
                        </span>
                    </div>
                </div>
            </div>

            <!-- Explanation (narasi dari backend) -->
            <div class="bg-white rounded-xl p-4 sm:p-5 lg:p-6 shadow-md">
                <div class="flex items-start gap-3 lg:gap-4">
                    <div class="w-9 h-9 lg:w-10 lg:h-10 bg-red-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 lg:w-6 lg:h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h5 class="font-bold text-base sm:text-lg lg:text-xl text-gray-800 mb-2 lg:mb-3">
                            Penjelasan Hasil
                        </h5>
                        <div id="explanation" 
                             class="text-sm sm:text-base lg:text-lg text-gray-700 leading-relaxed line-clamp-3 transition-all duration-300"
                             aria-expanded="false"
                             tabindex="0">
                            {!! $narrative !!}
                        </div>
                        <p class="text-gray-500 text-xs sm:text-sm mt-3">
                            Catatan: Hasil ini merupakan prediksi berbasis model dan bukan diagnosis medis pasti. 
                            Untuk kepastian, silakan konsultasikan dengan tenaga kesehatan profesional.
                        </p>
                        <button type="button"
                                onclick="toggleExplanation()" 
                                class="text-cyan-600 text-sm sm:text-base font-semibold mt-3 hover:text-cyan-700 flex items-center gap-1 transition-colors focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 rounded-md px-2 py-1"
                                aria-controls="explanation"
                                aria-label="Perluas atau sembunyikan penjelasan">
                            <span id="btnText">Baca selengkapnya</span>
                            <svg id="btnIcon" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="mb-8 lg:mb-10" aria-labelledby="articles-heading">
    <h3 id="articles-heading" class="font-bold text-lg sm:text-xl lg:text-2xl mb-4 lg:mb-6 text-gray-800">
        Saran Artikel
    </h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">

        @forelse($artikels as $artikel)
            <article class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 sm:p-5 hover:shadow-xl transition-all duration-300 hover-lift border border-gray-200">

                {{-- Card --}}
                <div class="cursor-pointer">
                    <div class="rounded-lg h-28 sm:h-32 mb-3 overflow-hidden">
                        <img src="{{ asset('storage/' . $artikel->gambar) }}"
                             alt="{{ $artikel->judul }}"
                             class="w-full h-full object-cover">
                    </div>

                    <h4 class="text-sm sm:text-base font-semibold text-gray-800 line-clamp-2 leading-snug">
                        {{ $artikel->judul }}
                    </h4>
                </div>

                {{-- Tombol Baca Selengkapnya --}}
                <a href="{{ route('artikel.show', $artikel->slug) }}"
                   class="inline-flex items-center mt-3 text-sm font-semibold text-cyan-600 hover:text-cyan-700">
                    Baca Selengkapnya
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5l7 7-7 7" />
                    </svg>
                </a>

            </article>
        @empty
            <p class="text-gray-500 text-sm">Belum ada artikel.</p>
        @endforelse

    </div>
</section>

    <!-- Recommendations Banner -->
    <a href="/saran" class="block bg-[#F3FDFF] rounded-2xl p-5 sm:p-6 mb-8 hover-lift transition-all duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-cyan-300">
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <div class="flex-1 min-w-[200px]">
                <h3 class="font-bold text-base sm:text-lg lg:text-xl mb-2 text-gray-800">
                    Rekomendasi & Saran Kesehatan untuk Penderita Asma
                </h3>
                <p class="text-sm sm:text-base text-cyan-600 font-semibold flex items-center gap-2">
                    Klik di sini untuk Saran Kesehatan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </p>
            </div>
            <img src="{{ asset('images/sarankesehatan.png') }}" 
                 alt="Ilustrasi saran kesehatan" 
                 class="w-24 h-24 sm:w-28 sm:h-28 lg:w-32 lg:h-32"
                 loading="lazy">
        </div>
    </a>

   <!-- Action Buttons -->
    <section class="space-y-4 lg:space-y-5 fade-in" style="animation-delay: 0.5s" aria-label="Aksi">

        @auth
            <!-- Kalau SUDAH login: tampilkan tombol asli -->
            <!-- Grid 2 tombol pertama -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-5">
                <a href="{{ route('pertanyaan.index') }}"
                class="w-full bg-[#01E1FF] text-white font-bold py-4 lg:py-5 rounded-2xl 
                        hover:bg-[#00c9e6] transition-all duration-300 transform hover:scale-105 
                        shadow-lg hover:shadow-xl flex items-center justify-center gap-2 sm:gap-3
                        focus:outline-none focus:ring-4 focus:ring-cyan-300"
                aria-label="Lihat kembali jawaban tes Anda">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-sm sm:text-base lg:text-lg">Kembali Ke Halaman Pertanyaan</span>
                </a>

                <a href="{{ route('hasil.pdf', $hasil->id) }}"
                class="w-full bg-[#01E1FF] text-white font-bold py-4 lg:py-5 rounded-2xl 
                        hover:bg-[#00c9e6] transition-all duration-300 transform hover:scale-105 
                        shadow-lg hover:shadow-xl flex items-center justify-center gap-2 sm:gap-3
                        focus:outline-none focus:ring-4 focus:ring-cyan-300"
                aria-label="Download hasil tes dalam format PDF">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    <span class="text-sm sm:text-base lg:text-lg">Download PDF</span>
                </a>
            </div>

            <!-- Tombol ketiga di tengah -->
            <div class="flex justify-center">
                <a href="{{ route('riwayat.index') }}"
                class="w-full sm:w-[calc(50%-0.625rem)] bg-[#01E1FF] text-white font-bold py-4 lg:py-5 
                        rounded-2xl hover:bg-[#00c9e6] transition-all duration-300 transform hover:scale-105 
                        shadow-lg hover:shadow-xl flex items-center justify-center gap-2 sm:gap-3
                        focus:outline-none focus:ring-4 focus:ring-cyan-300"
                aria-label="Lihat riwayat tes sebelumnya">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <span class="text-sm sm:text-base lg:text-lg">Lihat Riwayat Tes</span>
                </a>
            </div>

        @else
            <!-- Kalau BELUM login: arahkan ke login -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-5">
                <a href="{{ route('pertanyaan.index') }}"
                class="w-full bg-[#01E1FF] text-white font-bold py-4 lg:py-5 rounded-2xl 
                        hover:bg-[#00c9e6] transition-all duration-300 transform hover:scale-105 
                        shadow-lg hover:shadow-xl flex items-center justify-center gap-2 sm:gap-3
                        focus:outline-none focus:ring-4 focus:ring-cyan-300">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-sm sm:text-base lg:text-lg">Kembali Ke Halaman Pertanyaan</span>
                </a>

                <a href="{{ route('login') }}"
                class="w-full bg-gray-300 text-gray-700 font-bold py-4 lg:py-5 rounded-2xl 
                        hover:bg-gray-400 transition-all duration-300 transform hover:scale-105 
                        shadow-lg hover:shadow-xl flex items-center justify-center gap-2 sm:gap-3
                        focus:outline-none focus:ring-4 focus:ring-cyan-300">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    <span class="text-sm sm:text-base lg:text-lg">Login untuk Download PDF</span>
                </a>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('login') }}"
                class="w-full sm:w-[calc(50%-0.625rem)] bg-gray-300 text-gray-700 font-bold py-4 lg:py-5 
                        rounded-2xl hover:bg-gray-400 transition-all duration-300 transform hover:scale-105 
                        shadow-lg hover:shadow-xl flex items-center justify-center gap-2 sm:gap-3
                        focus:outline-none focus:ring-4 focus:ring-cyan-300">
                    <svg class="w-5 h-5 lg:w-6 lg:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <span class="text-sm sm:text-base lg:text-lg">Login untuk Lihat Riwayat Tes</span>
                </a>
            </div>
        @endauth
    </section>
</main>

<script>
    let isExpanded = false;
    
    function toggleExplanation() {
        const explanation = document.getElementById('explanation');
        const btnText = document.getElementById('btnText');
        const btnIcon = document.getElementById('btnIcon');
        
        isExpanded = !isExpanded;
        
        if (isExpanded) {
            explanation.classList.remove('line-clamp-3');
            explanation.setAttribute('aria-expanded', 'true');
            btnText.textContent = 'Sembunyikan';
            btnIcon.style.transform = 'rotate(180deg)';
        } else {
            explanation.classList.add('line-clamp-3');
            explanation.setAttribute('aria-expanded', 'false');
            btnText.textContent = 'Baca selengkapnya';
            btnIcon.style.transform = 'rotate(0deg)';
        }
    }

    // Keyboard accessibility untuk expand/collapse
    document.addEventListener('DOMContentLoaded', function() {
        const explanation = document.getElementById('explanation');
        if (explanation) {
            explanation.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleExplanation();
                }
            });
        }
    });
</script>

@auth
    <x-footer />
@else
    <x-footer_index />
@endauth

@endsection
