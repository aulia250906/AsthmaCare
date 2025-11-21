@extends('layout.app')

@section('title', 'Kebijakan Privasi')

@section('content')
  <div class="min-h-screen bg-gradient-to-br from-[#01E1FF] to-[#a7ffeb] flex items-center justify-center p-6">
    <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-lg p-10 max-w-3xl text-gray-700">
      <h1 class="text-3xl font-bold mb-4 text-[#01E1FF] text-center">Kebijakan Privasi</h1>
      <p class="mb-3 text-justify">
        Privasi Anda sangat penting bagi kami. <strong>AsthmaCare</strong> berkomitmen untuk melindungi
        informasi pribadi Anda sesuai dengan peraturan yang berlaku.
      </p>

      <ul class="list-disc pl-6 space-y-2">
        <li>Data pribadi yang dikumpulkan hanya digunakan untuk keperluan analisis kesehatan dan peningkatan layanan.</li>
        <li>Kami tidak akan membagikan data Anda kepada pihak ketiga tanpa izin.</li>
        <li>Anda dapat meminta penghapusan data kapan saja dengan menghubungi tim dukungan kami.</li>
        <li>Kami menggunakan teknologi keamanan untuk menjaga kerahasiaan informasi Anda.</li>
      </ul>

      <p class="mt-5 text-justify">
        Dengan menggunakan layanan kami, Anda menyetujui pengumpulan dan penggunaan data sesuai kebijakan ini.
      </p>

      <div class="mt-6 text-center">
        <a href="{{ route('register') }}" class="text-[#01E1FF] font-semibold hover:underline">Kembali ke halaman daftar</a>
      </div>
    </div>
  </div>
@endsection
