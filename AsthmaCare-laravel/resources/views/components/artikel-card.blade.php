@props([
    'artikel',
    'reverse' => false,
])

<div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl overflow-hidden transform transition-all duration-500 hover:-translate-y-2 border-2 border-transparent hover:border-cyan-300">
    <div class="flex flex-col md:flex-row {{ $reverse ? 'md:flex-row-reverse' : '' }} md:h-72">
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
