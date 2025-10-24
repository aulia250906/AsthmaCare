@extends('layout.app')

@section('title', 'Saran Kesehatan')

@section('content')

{{-- Navbar tampil sesuai status login --}}
    @auth
        <x-navbar /> {{-- Navbar setelah login --}}
    @else
        <x-navbar_index /> {{-- Navbar sebelum login --}}
    @endauth

<!-- Kontainer utama -->
<div class="w-full min-h-screen bg-gray-50 py-16">

  <!-- Wrapper konten dengan padding konsisten -->
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

    <!-- HEADER -->
    <section class="bg-white rounded-2xl shadow-md p-6 sm:p-8 flex flex-col md:flex-row justify-between items-center gap-8">
      <div class="text-center md:text-left md:flex-1">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 leading-snug">
          Rekomendasi & Saran Kesehatan <br> untuk Penderita Asma
        </h1>
        <p class="text-gray-600 mt-3 text-base sm:text-lg leading-relaxed">
          Temukan gaya hidup, makanan, dan olahraga yang sesuai dengan kondisi asma Anda.
          <br class="hidden sm:block">
          Cocokkan dengan hasil tes risiko Anda.
        </p>
      </div>
      <img src="{{ asset('images/sarankesehatan.png') }}" alt="Ilustrasi Artikel" 
           class="w-48 sm:w-60 md:w-72 lg:w-80 object-contain">
    </section>

    <!-- CARD RISIKO -->
    <section class="space-y-10">
      <!-- Risiko Rendah -->
      <div class="bg-[#ABEECA] rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-[#ABEECA] px-6 py-4 flex items-center gap-3 border-[#8BD2AA]">
          <img src="/images/centang.png" alt="Centang" class="h-6 w-6 sm:h-7 sm:w-7">
          <h2 class="text-[#335803] font-bold text-lg sm:text-xl">
            Risiko Rendah (Asma Terkontrol)
          </h2>
        </div>
        <div class="p-5 sm:p-8 space-y-8">
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
            image="/images/hijau1.png"
          />

          <x-card 
            title="Makanan yang disarankan"
            :list="[
              'Buah & sayur segar (apel, brokoli, bayam, wortel).',
              'Ikan beromega-3 (salmon, tuna).',
              'Makanan tinggi antioksidan (berry, alpukat).'
            ]"
            image="/images/hijau2.png"
          />

          <x-card 
            title="Olahraga yang disarankan"
            :list="[
              'Jalan santai, bersepeda ringan.',
              'Yoga atau pilates.',
              'Renang (aman untuk paru-paru).'
            ]"
            image="/images/hijau3.png"
          />
        </div>
      </div>

      <!-- Risiko Sedang -->
      <div class="bg-[#FFE8A4] rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-[#FFE8A4] px-6 py-4 flex items-center gap-3 border-[#EAC76E]">
          <img src="/images/centang.png" alt="Centang" class="h-6 w-6 sm:h-7 sm:w-7">
          <h2 class="text-[#D38807] font-bold text-lg sm:text-xl">
            Risiko Sedang (Perlu perhatian khusus)
          </h2>
        </div>
        <div class="p-5 sm:p-8 space-y-8">
          <x-card 
            title="Gaya Hidup"
            :list="[
              'Cek ke dokter setiap 3–6 bulan.',
              'Gunakan masker bila diperlukan.',
              'Catat pola kambuh (jam, pencetus).',
              'Hindari aktivitas terlalu berat.',
              'Hindari olahraga di udara dingin tanpa pemanasan.',
              'Hindari makanan cepat saji tinggi lemak.'
            ]"
            image="/images/kuning1.png"
          />

          <x-card 
            title="Makanan yang disarankan"
            :list="[
              'Sup hangat (sayur, ayam tanpa lemak).',
              'Jahe, kunyit (bisa dimasak/minuman).',
              'Buah kaya vitamin C (jeruk, kiwi, pepaya).'
            ]"
            image="/images/kuning2.png"
          />

          <x-card 
            title="Olahraga yang disarankan"
            :list="[
              'Jalan kaki 20–30 menit.',
              'Senam pernapasan ringan.',
              'Stretching rutin.'
            ]"
            image="/images/kuning3.png"
          />
        </div>
      </div>

      <!-- Risiko Tinggi -->
      <div class="bg-[#FEAFB7] rounded-2xl shadow-lg overflow-hidden">
        <div class="bg-[#FEAFB7] px-6 py-4 flex items-center gap-3 border-[#F18A94]">
          <img src="/images/centang.png" alt="Centang" class="h-6 w-6 sm:h-7 sm:w-7">
          <h2 class="text-[#FF0300] font-bold text-lg sm:text-xl">
            Risiko Tinggi (Perlu pengawasan ketat)
          </h2>
        </div>
        <div class="p-5 sm:p-8 space-y-8">
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
            image="/images/merah1.png"
          />

          <x-card 
            title="Makanan yang disarankan"
            :list="[
              'Makanan hangat & mudah dicerna (sup, bubur).',
              'Hindari makanan/minuman pemicu alergi.',
              'Perbanyak buah antioksidan tinggi (jeruk, alpukat, beri).',
              'Air putih hangat (hindari dingin/es).'
            ]"
            image="/images/merah2.png"
          />

          <x-card 
            title="Olahraga yang disarankan"
            :list="[
              'Senam pernapasan ringan.',
              'Yoga ringan khusus pernapasan.',
              'Hindari olahraga berat tanpa izin dokter.'
            ]"
            image="/images/merah3.png"
          />
        </div>
      </div>
    </section>

  </div>
</div>

@endsection
