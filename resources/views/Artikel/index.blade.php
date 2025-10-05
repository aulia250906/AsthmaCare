<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel - AsthmaCare</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Navbar Component -->
    <x-navbar />

    <!-- Konten -->
    <div class="container mx-auto px-6 py-20"> <!-- jarak atas diperbesar -->
        <!-- Header -->
        <div class="bg-white rounded-2xl shadow-md p-8 flex justify-between items-center mb-12">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Daftar Artikel</h1>
                <p class="text-gray-600 mt-3 text-lg leading-relaxed">
                    Kumpulan artikel seputar asma seperti gejala, penanganan, tips bepergian, diet dan lainnya.
                </p>
            </div>
            <img src="{{ asset('images/ilustrasiartikel.png') }}" alt="Ilustrasi Artikel" class="w-40">
        </div>

        <!-- Pencarian dan Filter -->
        <div class="mt-4 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="w-full md:w-2/3 flex items-center border rounded-xl px-4 py-3 bg-white shadow-sm">
                <input type="text" placeholder="Cari artikel, judul, topik" class="flex-1 outline-none text-gray-700 text-lg">
                <button class="text-gray-500 text-xl"><i class="fas fa-search"></i></button>
            </div>
            <select class="border rounded-xl px-4 py-3 bg-white shadow-sm text-gray-700 text-lg">
                <option>Terbaru</option>
                <option>Terlama</option>
            </select>
        </div>

        <!-- List Artikel -->
        <div class="grid grid-cols-1 gap-10 mt-14">

            <!-- Artikel 1 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-8 hover:shadow-lg transition w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-2xl text-gray-800">
                        Gejala Asma atau Flu Biasa? Begini Cara Membedakannya
                    </h2>
                    <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                        Artikel yang membahas bagaimana membedakan gejala asma dengan flu biasa, durasi gejala, dan respons terhadap obat.
                    </p>
                    <a href="#" class="text-blue-500 mt-5 inline-block font-medium text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-3xl">🖼️</span>
                </div>
            </div>

            <!-- Artikel 2 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-8 hover:shadow-lg transition w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-2xl text-gray-800">
                        Pertolongan Pertama pada Asma: Langkah-Langkah Penting
                    </h2>
                    <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                        Panduan singkat langkah pertolongan pertama pada serangan asma yang bisa membantu mengurangi risiko.
                    </p>
                    <a href="#" class="text-blue-500 mt-5 inline-block font-medium text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-3xl">🖼️</span>
                </div>
            </div>

            <!-- Artikel 3 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-8 hover:shadow-lg transition w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-2xl text-gray-800">
                        Tips Bepergian Aman dan Nyaman untuk Penderita Asma
                    </h2>
                    <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                        Tips penting untuk menjaga kondisi tetap stabil saat bepergian jauh bagi penderita asma.
                    </p>
                    <a href="#" class="text-blue-500 mt-5 inline-block font-medium text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-3xl">🖼️</span>
                </div>
            </div>

            <!-- Artikel 4 -->
            <div class="bg-white rounded-2xl shadow-md flex flex-col md:flex-row p-8 border-2 border-blue-400 hover:shadow-lg transition w-full">
                <div class="flex-1">
                    <h2 class="font-semibold text-2xl text-gray-800">
                        Asma: Penjelasan, Gejala, Faktor, Pengobatan dan Pencegahan
                    </h2>
                    <p class="text-gray-600 mt-4 text-lg leading-relaxed">
                        Ulasan lengkap seputar penyebab, faktor risiko, hingga cara pengobatan dan pencegahan serangan asma.
                    </p>
                    <a href="#" class="text-blue-500 mt-5 inline-block font-medium text-lg">Baca Selengkapnya →</a>
                </div>
                <div class="mt-6 md:mt-0 md:ml-8 w-full md:w-64 h-52 bg-gray-100 flex items-center justify-center text-gray-400 rounded-xl">
                    <span class="text-3xl">🖼️</span>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center items-center space-x-3 text-gray-600 text-lg">
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-100">← Sebelumnya</a>
            <a href="#" class="px-4 py-2 bg-blue-500 text-white rounded-lg">1</a>
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-100">2</a>
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-100">3</a>
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-100">4</a>
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-100">5</a>
            <a href="#" class="px-4 py-2 rounded-lg hover:bg-blue-100">Selanjutnya →</a>
        </div>
    </div>
</body>
</html>
