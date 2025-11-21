@extends('layout.app')

@section('title', 'Daftar Artikel')

@section('content')

@auth
    <x-navbar />
@else
    <x-navbar_index />
@endauth

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
<div class="mt-6 flex flex-col md:flex-row justify-between items-center gap-4">

    <!-- Search Field -->
    <div class="relative w-full md:flex-1">
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari artikel berdasarkan judul..."
            class="bg-gray-100 rounded-full px-4 py-3 pr-10 text-base text-gray-700 w-full
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400
                   transition-all duration-300"
        />
        <button type="submit"
            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 text-lg">
            🔍
        </button>
    </div>

    <!-- Dropdown (Sort) -->
    <div class="relative w-full md:w-44" id="dropdownSort">

        <!-- Trigger -->
        <button id="dropdownSortBtn"
            class="bg-gray-100 rounded-full px-5 py-3 text-base text-gray-700 w-full flex items-center justify-between border border-transparent transition-all duration-300">
            <span id="dropdownSortLabel">
                {{ request('sort') === 'terlama' ? 'Terlama' : 'Terbaru' }}
            </span>
            <span id="dropdownSortArrow" class="transition-transform duration-300">▼</span>
        </button>

        <!-- Menu -->
        <div id="dropdownSortMenu"
            class="absolute left-0 mt-2 w-full bg-white rounded-xl shadow-lg border border-cyan-300
                   opacity-0 invisible translate-y-2 transition-all duration-300 z-20">

            <button data-value="terbaru"
                class="dropdownSortItem w-full text-left px-4 py-2 hover:bg-cyan-50">
                Terbaru
            </button>

            <button data-value="terlama"
                class="dropdownSortItem w-full text-left px-4 py-2 hover:bg-cyan-50">
                Terlama
            </button>

        </div>
    </div>
</div>


    <!-- List Artikel -->
    <div class="mt-10 space-y-8 max-w-6xl mx-auto">
        @foreach ($artikels as $index => $artikel)
            <div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 border-2 border-transparent hover:border-cyan-300">
                <div class="flex flex-col md:flex-row {{ $index % 2 == 1 ? 'md:flex-row-reverse' : '' }} md:h-72">
                    <div class="relative w-full md:w-1/2 bg-gradient-to-br from-cyan-100 to-blue-100 h-64 md:h-full flex items-center justify-center overflow-hidden">
                        @if ($artikel->gambar)
                            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-5xl relative z-10">🖼️</span>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
                        <h2 class="font-bold text-2xl text-gray-900 leading-tight group-hover:text-cyan-600 transition-colors duration-300">
                            {{ $artikel->judul }}
                        </h2>
                        <p class="text-gray-600 mt-3 text-base leading-relaxed line-clamp-3">
                            {{ Str::limit(strip_tags($artikel->isi), 150) }}
                        </p>
                        <a href="{{ route('artikel.show', $artikel->slug) }}" class="text-cyan-500 mt-4 inline-flex items-center gap-2 font-semibold text-base hover:text-cyan-600 group/link">
                            Baca Selengkapnya
                            <svg class="w-5 h-5 group-hover/link:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12 flex justify-center">
        <div class="bg-white rounded-2xl shadow-sm p-4">
            {{ $artikels->links() }}
        </div>
    </div>
</div>

<x-footer />
@endsection

<script>
document.addEventListener("DOMContentLoaded", function() {

    const btn = document.getElementById("dropdownSortBtn");
    const menu = document.getElementById("dropdownSortMenu");
    const arrow = document.getElementById("dropdownSortArrow");
    const label = document.getElementById("dropdownSortLabel");
    const container = document.getElementById("dropdownSort");

    btn.addEventListener("click", function(e) {
        e.stopPropagation();
        menu.classList.toggle("opacity-0");
        menu.classList.toggle("invisible");
        menu.classList.toggle("translate-y-2");
        arrow.classList.toggle("rotate-180");
    });

    document.querySelectorAll(".dropdownSortItem").forEach(item => {
        item.addEventListener("click", function() {
            const value = this.dataset.value;

            // update label
            label.textContent = this.textContent.trim();

            // update URL
            const url = new URL(window.location.href);
            url.searchParams.set("sort", value);
            window.location.href = url.toString();
        });
    });

    document.addEventListener("click", function(e) {
        if (!container.contains(e.target)) {
            menu.classList.add("opacity-0", "invisible", "translate-y-2");
            arrow.classList.remove("rotate-180");
        }
    });

});
</script>
