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
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-26"> <!-- responsif padding -->
        <!-- Header -->
        <div class="bg-white rounded-2xl shadow-md p-6 sm:p-8 flex flex-col md:flex-row justify-between items-center gap-6 mb-12">
            <div class="text-center md:text-left">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800">Daftar Artikel</h1>
                <p class="text-gray-600 mt-3 text-base sm:text-lg leading-relaxed">
                    Kumpulan artikel seputar asma seperti gejala, penanganan, tips bepergian, diet dan lainnya.
                </p>
            </div>
            <img src="{{ asset('images/ilustrasiartikel.png') }}" alt="Ilustrasi Artikel" class="w-32 sm:w-40">
        </div>

        <!-- Pencarian dan Filter -->
        <div class="mt-4 flex flex-col md:flex-row justify-between items-stretch md:items-center gap-4 sm:gap-6">
            <div class="w-full md:w-2/3 flex items-center border rounded-xl px-4 py-2 sm:py-3 bg-white shadow-sm">
                <input type="text" placeholder="Cari artikel, judul, topik" class="flex-1 outline-none text-gray-700 text-base sm:text-lg">
                <button class="text-gray-500 text-lg sm:text-xl"><i class="fas fa-search"></i></button>
            </div>
            <select class="w-full md:w-auto border rounded-xl px-4 py-2 sm:py-3 bg-white shadow-sm text-gray-700 text-base sm:text-lg">
                <option>Terbaru</option>
                <option>Terlama</option>
            </select>
        </div>

        <!-- List Artikel -->
        <div class="grid grid-cols-1 gap-8 sm:gap-10 mt-12 sm:mt-14">

            <!-- Artikel 1 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-6 sm:p-8 transform transition duration-300 hover:shadow-lg hover:scale-[1.02] hover:-translate-y-1 w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-xl sm:text-2xl text-gray-800">
                        Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
                    </h2>
                    <p class="text-gray-600 mt-3 sm:mt-4 text-base sm:text-lg leading-relaxed">
                        Artikel yang membahas bagaimana membedakan gejala asma dengan flu biasa, durasi gejala, dan respons terhadap obat.
                    </p>
                    <a href="#" class="text-blue-500 mt-4 sm:mt-5 inline-block font-medium text-base sm:text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-5 sm:mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-44 sm:h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-2xl sm:text-3xl">🖼️</span>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-6 sm:p-8 transform transition duration-300 hover:shadow-lg hover:scale-[1.02] hover:-translate-y-1 w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-xl sm:text-2xl text-gray-800">
                        Pertolongan Pertama pada Asma: Langkah-Langkah Penting
                    </h2>
                    <p class="text-gray-600 mt-3 sm:mt-4 text-base sm:text-lg leading-relaxed">
                        Panduan singkat langkah pertolongan pertama pada serangan asma yang bisa membantu mengurangi risiko.
                    </p>
                    <a href="#" class="text-blue-500 mt-4 sm:mt-5 inline-block font-medium text-base sm:text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-5 sm:mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-44 sm:h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-2xl sm:text-3xl">🖼️</span>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-6 sm:p-8 transform transition duration-300 hover:shadow-lg hover:scale-[1.02] hover:-translate-y-1 w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-xl sm:text-2xl text-gray-800">
                        Tips Bepergian Aman dan Nyaman untuk Penderita Asma
                    </h2>
                    <p class="text-gray-600 mt-3 sm:mt-4 text-base sm:text-lg leading-relaxed">
                        Tips penting untuk menjaga kondisi tetap stabil saat bepergian jauh bagi penderita asma.
                    </p>
                    <a href="#" class="text-blue-500 mt-4 sm:mt-5 inline-block font-medium text-base sm:text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-5 sm:mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-44 sm:h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-2xl sm:text-3xl">🖼️</span>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-6 sm:p-8 transform transition duration-300 hover:shadow-lg hover:scale-[1.02] hover:-translate-y-1 w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-xl sm:text-2xl text-gray-800">
                        Asma: Penjelasan, Gejala, Faktor, Pengobatan dan Pencegahan
                    </h2>
                    <p class="text-gray-600 mt-3 sm:mt-4 text-base sm:text-lg leading-relaxed">
                        Ulasan lengkap seputar penyebab, faktor risiko, hingga cara pengobatan dan pencegahan serangan asma.
                    </p>
                    <a href="#" class="text-blue-500 mt-4 sm:mt-5 inline-block font-medium text-base sm:text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-5 sm:mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-44 sm:h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-2xl sm:text-3xl">🖼️</span>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-14 sm:mt-16 flex flex-wrap justify-center items-center gap-2 sm:space-x-3 text-gray-600 text-base sm:text-lg">
            <a href="#" class="px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-100">← Sebelumnya</a>
            <a href="#" class="px-3 sm:px-4 py-2 bg-blue-500 text-white rounded-lg">1</a>
            <a href="#" class="px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-100">2</a>
            <a href="#" class="px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-100">3</a>
            <a href="#" class="px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-100">4</a>
            <a href="#" class="px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-100">5</a>
            <a href="#" class="px-3 sm:px-4 py-2 rounded-lg hover:bg-blue-100">Selanjutnya →</a>
        </div>
    </div>

    <!-- Footer -->
    <x-footer />
@endsection
