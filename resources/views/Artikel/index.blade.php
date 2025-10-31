@extends('layout.app')

@section('title', 'Daftar Artikel')

@section('content')

    {{-- Navbar tampil sesuai status login --}}
    @auth
        <x-navbar /> {{-- Navbar setelah login --}}
    @else
        <x-navbar_index /> {{-- Navbar sebelum login --}}
    @endauth

    <!-- Konten -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
        <!-- Header -->
        <div class="bg-white rounded-3xl shadow-sm p-8 sm:p-10 flex flex-col md:flex-row justify-between items-center gap-6 mb-10">
            <div class="text-center md:text-left max-w-xl">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900">Daftar Artikel</h1>
                <p class="text-gray-600 mt-3 text-base sm:text-lg leading-relaxed">
                    Kumpulan artikel seputar asma seperti gejala, penanganan, tips bepergian, diet dan lainnya.
                </p>
            </div>
            <img src="{{ asset('images/ilustrasiartikel.png') }}" alt="Ilustrasi Artikel" class="w-40 sm:w-48 flex-shrink-0">
        </div>

        <!-- Pencarian dan Filter -->
        <div class="mt-6 flex flex-col md:flex-row justify-between items-stretch md:items-center gap-4">
            <div class="w-full md:flex-1 flex items-center border border-gray-200 rounded-2xl px-5 py-3 bg-white shadow-sm">
                <input type="text" placeholder="Cari artikel, judul, topik" class="flex-1 outline-none text-gray-700 text-base placeholder-gray-400">
                <button class="text-gray-400 text-xl ml-2"><i class="fas fa-search"></i></button>
            </div>
            <select class="w-full md:w-auto border border-gray-200 rounded-2xl px-5 py-3 bg-white shadow-sm text-gray-700 text-base min-w-[140px]">
                <option>Terbaru</option>
                <option>Terlama</option>
            </select>
        </div>

        <!-- List Artikel -->
        <div class="mt-10 space-y-8 max-w-6xl mx-auto">

            <!-- Artikel 1 - Image Kiri -->
            <div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 border-2 border-transparent hover:border-cyan-300">
                <div class="flex flex-col md:flex-row md:h-72">
                    <div class="relative w-full md:w-1/2 bg-gradient-to-br from-cyan-100 to-blue-100 h-64 md:h-full flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-500/20 group-hover:scale-110 transition-transform duration-500"></div>
                        <span class="text-5xl relative z-10 group-hover:scale-110 transition-transform duration-500">🖼️</span>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold text-cyan-600 shadow-sm">
                            5 min read
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
                        <h2 class="font-bold text-2xl text-gray-900 leading-tight group-hover:text-cyan-600 transition-colors duration-300">
                            Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
                        </h2>
                        <p class="text-gray-600 mt-3 text-base leading-relaxed line-clamp-3">
                            Artikel yang membahas bagaimana membedakan gejala asma dan flu atau demam dengan pola batuk, adanya mengi, durasi gejala, dan respons terhadap obat.
                        </p>
                        <a href="#" class="text-cyan-500 mt-4 inline-flex items-center gap-2 font-semibold text-base hover:text-cyan-600 group/link">
                            Baca Selengkapnya 
                            <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 2 - Image Kanan -->
            <div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 border-2 border-transparent hover:border-cyan-300">
                <div class="flex flex-col md:flex-row-reverse md:h-72">
                    <div class="relative w-full md:w-1/2 bg-gradient-to-br from-cyan-100 to-blue-100 h-64 md:h-full flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-500/20 group-hover:scale-110 transition-transform duration-500"></div>
                        <span class="text-5xl relative z-10 group-hover:scale-110 transition-transform duration-500">🖼️</span>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold text-cyan-600 shadow-sm">
                            3 min read
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
                        <h2 class="font-bold text-2xl text-gray-900 leading-tight group-hover:text-cyan-600 transition-colors duration-300">
                            Pertolongan Pertama pada Asma: Langkah-Langkah Penting
                        </h2>
                        <p class="text-gray-600 mt-3 text-base leading-relaxed line-clamp-3">
                            Panduan singkat langkah pertolongan pertama saat serangan asma: tetap tenang, posisi yang benar, dan penggunaan inhaler segera.
                        </p>
                        <a href="#" class="text-cyan-500 mt-4 inline-flex items-center gap-2 font-semibold text-base hover:text-cyan-600 group/link">
                            Baca Selengkapnya 
                            <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 3 - Image Kiri -->
            <div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 border-2 border-transparent hover:border-cyan-300">
                <div class="flex flex-col md:flex-row md:h-72">
                    <div class="relative w-full md:w-1/2 bg-gradient-to-br from-cyan-100 to-blue-100 h-64 md:h-full flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-500/20 group-hover:scale-110 transition-transform duration-500"></div>
                        <span class="text-5xl relative z-10 group-hover:scale-110 transition-transform duration-500">🖼️</span>
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold text-cyan-600 shadow-sm">
                            4 min read
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
                        <h2 class="font-bold text-2xl text-gray-900 leading-tight group-hover:text-cyan-600 transition-colors duration-300">
                            Tips Bepergian Aman dan Nyaman untuk Penderita Asma
                        </h2>
                        <p class="text-gray-600 mt-3 text-base leading-relaxed line-clamp-3">
                            Tips praktis untuk mengelola asma saat bepergian antara lain bawa obat cadangan, cek cuaca, dan pilih tempat duduk yang sesuai.
                        </p>
                        <a href="#" class="text-cyan-500 mt-4 inline-flex items-center gap-2 font-semibold text-base hover:text-cyan-600 group/link">
                            Baca Selengkapnya 
                            <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Artikel 4 - Image Kanan -->
            <div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 border-2 border-transparent hover:border-cyan-300">
                <div class="flex flex-col md:flex-row-reverse md:h-72">
                    <div class="relative w-full md:w-1/2 bg-gradient-to-br from-cyan-100 to-blue-100 h-64 md:h-full flex items-center justify-center overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-400/20 to-blue-500/20 group-hover:scale-110 transition-transform duration-500"></div>
                        <span class="text-5xl relative z-10 group-hover:scale-110 transition-transform duration-500">🖼️</span>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold text-cyan-600 shadow-sm">
                            7 min read
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
                        <h2 class="font-bold text-2xl text-gray-900 leading-tight group-hover:text-cyan-600 transition-colors duration-300">
                            Asma: Penjelasan, Gejala, Faktor, Pengobatan dan Pencegahan
                        </h2>
                        <p class="text-gray-600 mt-3 text-base leading-relaxed line-clamp-3">
                            Tujuh langkah pencegahan penting yang direkomendasikan oleh rumah sakit/ahli untuk mengurangi risiko serangan asma.
                        </p>
                        <a href="#" class="text-cyan-500 mt-4 inline-flex items-center gap-2 font-semibold text-base hover:text-cyan-600 group/link">
                            Baca Selengkapnya 
                            <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex flex-wrap justify-center items-center gap-2 text-gray-600">
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-gray-100 text-sm sm:text-base transition-colors">Sebelumnya</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center bg-cyan-500 text-white rounded-lg font-medium text-sm sm:text-base shadow-md hover:shadow-lg transition-all">1</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 text-sm sm:text-base transition-colors">2</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 text-sm sm:text-base transition-colors">3</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 text-sm sm:text-base transition-colors">4</a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 text-sm sm:text-base transition-colors">5</a>
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-gray-100 text-sm sm:text-base transition-colors">Selanjutnya</a>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
@endsection