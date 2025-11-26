@extends('layout.app')

@section('title', 'Daftar Dokter Spesialis Paru')

@section('content')
<body class="bg-gray-50">

    <!-- Navbar -->
    <x-navbar />

    <div class="container mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-3">
            Daftar Spesialis Paru Paru di Kota Batam
        </h1>
        <p class="text-center text-gray-600 text-lg mb-10">
            Cari dokter spesialis paru untuk konsultasi asma dan kesehatan pernapasan Anda
        </p>

        <!-- Pencarian -->
        <x-doctor-search 
            :action="route('dokter.index')" 
            :search="request('search')" 
        />

        <!-- Grid Dokter -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($doctors as $doctor)
                <x-doctor-card :doctor="$doctor" />
            @empty
                <x-doctor-empty />
            @endforelse
        </div>
    </div>

    <x-footer />
</body>
@endsection
