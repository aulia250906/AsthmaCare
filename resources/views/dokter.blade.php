<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter Spesialis Paru - AsthmaCare</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 font-sans">

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
            <div class="w-full md:w-2/3 lg:w-1/2 flex items-center border-2 border-gray-300 rounded-full bg-white px-5 py-3 shadow-md">
                <input type="text" placeholder="Cari dokter atau nama rumah sakit" class="flex-1 outline-none text-gray-700 text-lg">
                <i class="fas fa-search text-gray-500 text-xl"></i>
            </div>
        </div>

        <!-- Grid Dokter -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-white shadow-lg rounded-2xl p-8 flex items-center space-x-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <img src="{{ asset('images/dokter.png') }}" alt="Foto Dokter" class="w-28 h-28 rounded-full object-cover border-4 border-blue-100">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">dr. Abdul Malik, Sp.P</h3>
                        <p class="text-gray-600 text-base">RS Awal Bros Batam</p>
                        <p class="text-gray-500 text-sm mt-1"><i class="fas fa-map-marker-alt text-blue-500"></i> Jl. Gajah Mada, Baloi, Batam</p>
                        <button class="mt-4 px-5 py-2 border border-gray-400 rounded-lg text-sm hover:bg-blue-100 transition">
                            Lihat di Maps
                        </button>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Footer -->
        <p class="text-center text-gray-600 mt-20 text-lg">
            Butuh pertolongan darurat? Hubungi RS terdekat <a href="#" class="text-red-500 font-semibold hover:underline">Klik Disini</a>
        </p>
    </div>

</body>
</html>
