@extends('layout.app')

@section('title', 'Saran Kesehatan')

@section('content')
<body class="bg-gray-50">

    <!-- Navbar -->
    <x-navbar />

    <!-- Hero Section -->
    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-2xl overflow-hidden flex flex-col md:flex-row items-center justify-between mt-12 mb-16 px-8 py-10">
        <div class="flex-1">
            <h1 class="text-4xl font-bold text-gray-800 mb-4 leading-snug">
                Rekomendasi & Saran <br />
                Kesehatan untuk Penderita Asma
            </h1>
            <p class="text-gray-600 text-lg mb-6">
                Temukan gaya hidup, makanan, dan olahraga yang sesuai dengan kondisi asma Anda.
                Cocokkan dengan hasil tes risiko Anda.
            </p>
            <button 
                class="bg-sky-500 text-white px-5 py-2 rounded-lg shadow hover:bg-sky-600 transition transform active:scale-95 focus:outline-none focus:ring-0"
            >
                Lihat Riwayat
            </button>
        </div>
        <div class="flex-1 mt-8 md:mt-0 flex justify-center">
            <img src="{{ asset('images/sarankesehatan.png') }}" alt="Saran Kesehatan" class="w-72 md:w-96">
        </div>
    </div>

    <!-- Risiko Rendah -->
    <div class="max-w-6xl mx-auto bg-green-50 shadow-md rounded-2xl overflow-hidden flex flex-col md:flex-row items-start justify-between mb-16 px-8 py-10 border border-green-200 min-h-[350px]">
        <div class="flex-1 mr-8">
            <div class="flex items-center gap-2 mb-5">
                <div class="bg-green-100 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h2 class="text-green-700 font-bold text-2xl">
                    Risiko Rendah <span class="text-gray-700 text-lg">(Asma Terkontrol)</span>
                </h2>
            </div>

            <div class="space-y-4">
                <x-card 
                    title="Gaya Hidup" 
                    :list="[
                        'Hindari rokok dan asap rokok.',
                        'Rutin cek kesehatan 6-12 bulan sekali.',
                        'Kelola stres dengan baik (meditasi, tidur cukup).',
                        'Minum air putih.',
                        'Hindari debu, bulu hewan, polusi berlebihan.',
                        'Hindari minuman bersoda atau terlalu dingin.'
                    ]"
                    image="/images/gaya-hidup.png"
                />

                <x-card 
                    title="Makanan yang disarankan" 
                    :list="[
                        'Buah & sayur segar (apel, brokoli, bayam, wortel).',
                        'Ikan beromega-3 (salmon, tuna).',
                        'Makanan tinggi antioksidan (berry, alpukat).'
                    ]"
                    image="/images/makanan.png"
                />

                <x-card 
                    title="Olahraga yang disarankan" 
                    :list="[
                        'Jalan santai, bersepeda ringan.',
                        'Yoga atau pilates.',
                        'Renang (aman untuk paru-paru).'
                    ]"
                    image="/images/olahraga.png"
                />
            </div>
        </div>
    </div>

    <!-- Risiko Sedang -->
    <div class="max-w-6xl mx-auto bg-yellow-50 shadow-md rounded-2xl overflow-hidden flex flex-col md:flex-row items-start justify-between mb-16 px-8 py-10 border border-yellow-200 min-h-[350px]">
        <div class="flex-1 mr-8">
            <div class="flex items-center gap-2 mb-5">
                <div class="bg-yellow-100 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h2 class="text-yellow-700 font-bold text-2xl">
                    Risiko Sedang <span class="text-gray-700 text-lg">(Perlu perhatian khusus)</span>
                </h2>
            </div>

            <div class="space-y-4">
                <x-card 
                    title="Gaya Hidup" 
                    :list="[
                        'Cek ke dokter setiap 3-6 bulan.',
                        'Gunakan masker bila diperlukan.',
                        'Catat pola kambuh (jam, pencetus).',
                        'Hindari aktivitas terlalu berat.',
                        'Hindari olahraga di udara dingin tanpa pemanasan.',
                        'Hindari makanan cepat saji tinggi lemak.'
                    ]"
                    image="/images/gaya-hidup-2.png"
                />

                <x-card 
                    title="Makanan yang disarankan" 
                    :list="[
                        'Sup hangat (sayur, ayam tanpa lemak).',
                        'Jahe, kunyit (bisa dimasak/minuman).',
                        'Buah kaya vitamin C (jeruk, kiwi, pepaya).'
                    ]"
                    image="/images/makanan-2.png"
                />

                <x-card 
                    title="Olahraga yang disarankan" 
                    :list="[
                        'Jalan kaki 20–30 menit.',
                        'Senam pernapasan ringan.',
                        'Stretching rutin.'
                    ]"
                    image="/images/olahraga-2.png"
                />
            </div>
        </div>
    </div>

    <!-- Risiko Tinggi -->
    <div class="max-w-6xl mx-auto bg-red-50 shadow-md rounded-2xl overflow-hidden flex flex-col md:flex-row items-start justify-between mb-20 px-8 py-10 border border-red-200 min-h-[350px]">
        <div class="flex-1 mr-8">
            <div class="flex items-center gap-2 mb-5">
                <div class="bg-red-100 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h2 class="text-red-700 font-bold text-2xl">
                    Risiko Tinggi <span class="text-gray-700 text-lg">(Perlu pengawasan ketat)</span>
                </h2>
            </div>

            <div class="space-y-4">
                <x-card 
                    title="Gaya Hidup" 
                    :list="[
                        'Wajib kontrol ke dokter 1–3 bulan sekali.',
                        'Gunakan obat sesuai resep tanpa terlewat.',
                        'Hindari paparan asap, debu, polusi, bulu hewan.',
                        'Selalu siapkan inhaler darurat.',
                        'Hindari begadang & jaga kualitas tidur.',
                        'Segera ke IGD bila sesak semakin parah.'
                    ]"
                    image="/images/gaya-hidup-3.png"
                />

                <x-card 
                    title="Makanan yang disarankan" 
                    :list="[
                        'Makanan hangat & mudah dicerna (sup, bubur).',
                        'Hindari makanan/minuman pemicu alergi.',
                        'Perbanyak buah antioksidan tinggi (jeruk, alpukat, beri).',
                        'Air putih hangat (hindari dingin/es).'
                    ]"
                    image="/images/makanan-3.png"
                />

                <x-card 
                    title="Olahraga yang disarankan" 
                    :list="[
                        'Senam pernapasan ringan.',
                        'Yoga ringan khusus pernapasan.',
                        'Hindari olahraga berat tanpa izin dokter.'
                    ]"
                    image="/images/olahraga-3.png"
                />
            </div>
        </div>
    </div>

    <x-footer />
    
</body>
@endsection
