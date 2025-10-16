@extends('layout.app')

@section('title', 'Ketentuan Layanan')

@section('content')
  <div class="min-h-screen bg-gradient-to-br from-[#01E1FF] to-[#a7ffeb] flex items-center justify-center p-6">
    <div class="bg-white/90 backdrop-blur-md rounded-2xl shadow-lg p-10 max-w-3xl text-gray-700">
      <h1 class="text-3xl font-bold mb-4 text-[#01E1FF] text-center">Ketentuan Layanan</h1>
      <p class="mb-3 text-justify">
        Selamat datang di <strong>AsthmaCare</strong>. Dengan mendaftar dan menggunakan layanan kami,
        Anda setuju untuk mematuhi ketentuan yang berlaku berikut:
      </p>

      <ul class="list-disc pl-6 space-y-2">
        <li>Anda wajib memberikan data yang benar dan akurat.</li>
        <li>Akun Anda bersifat pribadi dan tidak boleh dibagikan ke orang lain.</li>
        <li>Layanan ini ditujukan untuk membantu deteksi dini asma, bukan sebagai pengganti diagnosis medis profesional.</li>
        <li>Pelanggaran terhadap ketentuan ini dapat mengakibatkan penangguhan atau penghapusan akun.</li>
      </ul>

      <p class="mt-5 text-justify">
        Kami berhak untuk mengubah atau memperbarui ketentuan layanan ini sewaktu-waktu.
        Perubahan akan diumumkan melalui situs web kami.
      </p>

      <div class="mt-6 text-center">
        <a href="{{ route('register') }}" class="text-[#01E1FF] font-semibold hover:underline">Kembali ke halaman daftar</a>
      </div>
    </div>
  </div>
@endsection
