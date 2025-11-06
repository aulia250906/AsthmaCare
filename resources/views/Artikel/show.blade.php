@extends('layout.app')

@section('title', $artikel->judul)

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
    <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-md p-10">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">{{ $artikel->judul }}</h1>
        
        @if ($artikel->gambar)
            <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}" class="rounded-2xl mb-6 w-full object-cover">
        @endif

        <div class="text-gray-700 leading-relaxed prose max-w-none">
            {!! $artikel->isi !!}
        </div>
    </div>
</div>

<style>
/* Tambahkan spasi antar paragraf biar rapi */
.prose p {
    margin-bottom: 1rem; /* jarak antar paragraf */
}

/* Jarak tambahan untuk baris <br> */
.prose br {
    display: block;
    content: "";
    margin-bottom: 0.75rem;
}

/* Teks tebal (bold) biar lebih jelas */
.prose strong {
    font-weight: 700;
    color: #111827;
}

/* Opsional: list (jika ada) lebih rapi */
.prose ul, .prose ol {
    margin-left: 1.5rem;
    margin-bottom: 1rem;
}

/* 🌐 Styling untuk link di dalam isi artikel */
.prose a {
    color: #2563eb; /* biru (Tailwind: blue-600) */
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s ease, text-decoration 0.2s ease;
}

.prose a:hover {
    color: #1d4ed8; /* biru lebih gelap saat hover */
    text-decoration: underline;
}
</style>
@endsection
