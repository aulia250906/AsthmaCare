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
        <div class="flex justify-center mb-12">
            <form action="{{ route('dokter.index') }}" method="GET" class="w-full md:w-2/3 lg:w-1/2 flex items-center border-2 border-gray-300 rounded-full bg-white px-5 py-3 shadow-md">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ request('search') }}" 
                    placeholder="Cari dokter atau nama rumah sakit" 
                    class="flex-1 outline-none text-gray-700 text-lg">
                <button type="submit">
                    <i class="fas fa-search text-gray-500 text-xl"></i>
                </button>
            </form>
        </div>

        <!-- Grid Dokter -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse ($doctors as $doctor)
                <div class="bg-white shadow-lg rounded-2xl p-8 flex items-center space-x-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->name }}" class="w-28 h-28 rounded-full object-cover border-4 border-blue-100">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">{{ $doctor->name }}</h3>
                        <p class="text-gray-600 text-base">{{ $doctor->hospital }}</p>
                        <p class="text-gray-500 text-sm mt-1">
                            <i class="fas fa-map-marker-alt text-blue-500"></i> {{ $doctor->address }}
                        </p>
                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($doctor->address) }}" target="_blank">
                            <button class="mt-4 px-5 py-2 border border-gray-400 rounded-lg text-sm hover:bg-blue-100 transition">
                                Lihat di Maps
                            </button>
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 text-lg col-span-3">
                    Belum ada data dokter yang tersedia.
                </p>
            @endforelse
        </div>
    </div>

    <x-footer />
</body>
@endsection
