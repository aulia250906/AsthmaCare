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
    <x-artikel-header />

    <!-- Pencarian dan Filter (WAJIB ada form) -->
    <form action="{{ route('artikel.index') }}" method="GET" class="w-full">
        <x-artikel-filter 
            :search="request('search')" 
            :sort="request('sort')" 
        />
    </form>

    <!-- List Artikel -->
    <div class="mt-10 space-y-8 max-w-6xl mx-auto">

        @if ($artikels->isEmpty())
            <div class="text-center py-10">
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">
                    ❌ Tidak menemukan judul artikel
                </h2>
            </div>
        @else
            @foreach ($artikels as $index => $artikel)
                <x-artikel-card :artikel="$artikel" :reverse="$index % 2 == 1" />
            @endforeach
        @endif

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

{{-- SCRIPT DROPDOWN SORT --}}
<script>
document.addEventListener("DOMContentLoaded", function() {

    const btn = document.getElementById("dropdownSortBtn");
    const menu = document.getElementById("dropdownSortMenu");
    const arrow = document.getElementById("dropdownSortArrow");
    const label = document.getElementById("dropdownSortLabel");
    const container = document.getElementById("dropdownSort");

    // Toggle menu
    btn.addEventListener("click", function(e) {
        e.stopPropagation();
        menu.classList.toggle("opacity-0");
        menu.classList.toggle("invisible");
        menu.classList.toggle("translate-y-2");
        arrow.classList.toggle("rotate-180");
    });

    // Pilih sort
    document.querySelectorAll(".dropdownSortItem").forEach(item => {
        item.addEventListener("click", function() {
            const value = this.dataset.value;

            // Update label
            label.textContent = this.textContent.trim();

            // Update URL
            const url = new URL(window.location.href);
            url.searchParams.set("sort", value);

            // PERTAHANKAN PENCARIAN
            const searchInput = document.querySelector("input[name='search']");
            if (searchInput && searchInput.value) {
                url.searchParams.set("search", searchInput.value);
            }

            window.location.href = url.toString();
        });
    });

    // Klik luar tutup menu
    document.addEventListener("click", function(e) {
        if (!container.contains(e.target)) {
            menu.classList.add("opacity-0", "invisible", "translate-y-2");
            arrow.classList.remove("rotate-180");
        }
    });

});
</script>
