@extends('layout.app')

@section('title', 'Ulasan Pengguna')

@section('content')

    <div class="bg-gradient-to-b from-[#e0f7fa] via-white to-[#f5ffff] min-h-screen flex flex-col">

        {{-- Navbar tampil sesuai status login --}}
        @auth
            <x-navbar />
        @else
            <x-navbar_index />
        @endauth

        {{-- Isi halaman --}}
        <main class="flex-1 flex flex-col items-center justify-start py-12">
            <x-review-form />
        </main>

        {{-- Footer --}}
        @auth
            <x-footer />
        @else
            <x-footer_index />
        @endauth

    </div>

@endsection
