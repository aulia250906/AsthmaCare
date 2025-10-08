@vite('resources/css/app.css')

<!-- Container -->
<div class="w-full min-h-screen bg-gray-50 py-8">
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

        <!-- Card Risiko Rendah -->
        <div class="w-full bg-green-50 rounded-lg shadow-md overflow-hidden border">
            <!-- Header -->
            <div class="bg-green-100 px-6 py-4 flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-7 sm:w-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <h2 class="text-green-700 font-bold text-lg sm:text-xl">
                    Risiko Rendah <span class="text-gray-700">(Asma Terkontrol)</span>
                </h2>
            </div>

            <!-- Content -->
            <div class="p-4 sm:p-6 space-y-6">
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

        <!-- Card Risiko Sedang -->
        <div class="w-full bg-yellow-50 rounded-lg shadow-md overflow-hidden border">
            <div class="bg-yellow-100 px-6 py-4 flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-7 sm:w-7 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <h2 class="text-yellow-700 font-bold text-lg sm:text-xl">
                    Risiko Sedang <span class="text-gray-700">(Perlu perhatian khusus)</span>
                </h2>
            </div>

            <div class="p-4 sm:p-6 space-y-6">
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

        <!-- Card Risiko Tinggi -->
        <div class="w-full bg-red-50 rounded-lg shadow-md overflow-hidden border">
            <div class="bg-red-100 px-6 py-4 flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 sm:h-7 sm:w-7 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                <h2 class="text-red-700 font-bold text-lg sm:text-xl">
                    Risiko Tinggi <span class="text-gray-700">(Perlu pengawasan ketat)</span>
                </h2>
            </div>

            <div class="p-4 sm:p-6 space-y-6">
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
</div>
