@extends('layout.app')

@section('title', 'Daftar')

@section('content')
<style>
  /* 🌈 Animasi background gradasi (tidak bisa dengan Tailwind) */
  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  /* 🌟 Efek bintang */
  .stars {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
  }
  .stars span {
    position: absolute;
    display: block;
    width: 3px;
    height: 3px;
    background: white;
    opacity: 0.7;
    border-radius: 50%;
    animation: sparkle 5s linear infinite;
  }
  @keyframes sparkle {
    0% { transform: translateY(0) scale(1); opacity: 0.6; }
    50% { transform: translateY(-10px) scale(1.3); opacity: 1; }
    100% { transform: translateY(0) scale(1); opacity: 0.6; }
  }
</style>

<!-- 🌈 Background animasi -->
<div class="relative min-h-screen w-full bg-gradient-to-r from-[#01E1FF] via-[#7fdbff] to-[#e0f7fa] px-4 overflow-x-hidden overflow-y-auto">

  <!-- ✨ Efek bintang -->
  <div class="stars">
    @for ($i = 0; $i < 30; $i++)
      <span style="top:{{ rand(0,100) }}%; left:{{ rand(0,100) }}%; animation-delay:{{ rand(0,5) }}s;"></span>
    @endfor
  </div>

  <!-- 🌟 Kartu utama -->
  <div class="relative z-10 flex flex-col md:flex-row max-w-5xl mx-auto my-10 rounded-2xl overflow-hidden shadow-2xl backdrop-blur-lg bg-white/85">
    
    <!-- Left -->
    <div class="md:w-1/2 flex flex-col justify-center items-center p-8 text-center bg-[#C3F7FF]">
      <img src="{{ asset('images/logoasma.png') }}" alt="Logo" class="w-36 mb-6 drop-shadow-lg">
      <h2 class="text-2xl font-bold mb-3 text-[#01E1FF]">Daftar di AsthmaCare</h2>
      <p class="text-gray-700">Mulai hidup sehat dengan pemantauan asma yang lebih cerdas dan mudah.</p>
    </div>

    <!-- Right -->
    <div class="md:w-1/2 p-10 flex flex-col justify-center">
      <h3 class="text-2xl font-semibold mb-6 text-center text-[#01E1FF]">Buat Akun Baru</h3>

       {{-- Notifikasi sukses --}}
        @if (session('success'))
            <div class="mb-4 p-3 rounded-lg border border-green-300 bg-green-100 text-green-800 text-sm">
                {{ session('success') }}
            </div>
        @endif

      <form action="{{ route('register') }}" method="POST" class="space-y-4">
      @csrf

      {{-- Jika ada error umum --}}
      @if ($errors->any())
          <div class="mb-4 p-3 rounded-lg border border-red-300 bg-red-100 text-red-800 text-sm">
              <ul class="list-disc pl-4">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          {{-- NAMA --}}
          <div>
              <label class="block text-gray-700 mb-1">Nama Lengkap</label>
              <input type="text" name="name" value="{{ old('name') }}" required
                    class="w-full border border-[#01E1FF] rounded-lg p-2 focus:ring-2 focus:ring-[#01E1FF] focus:outline-none"
                    oninvalid="this.setCustomValidity('Silakan isi nama lengkap Anda')"
                    oninput="this.setCustomValidity('')">

              @error('name')
                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
              @enderror
          </div>

          {{-- USERNAME --}}
          <div>
              <label class="block text-gray-700 mb-1">Username</label>
              <input type="text" name="username" value="{{ old('username') }}" required
                    class="w-full border border-[#01E1FF] rounded-lg p-2 focus:ring-2 focus:ring-[#01E1FF] focus:outline-none"
                    oninvalid="this.setCustomValidity('Silakan isi username Anda')"
                    oninput="this.setCustomValidity('')">

              @error('username')
                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
              @enderror
          </div>
      </div>

      {{-- EMAIL --}}
      <div>
          <label class="block text-gray-700 mb-1">Email</label>
          <input type="email" name="email" value="{{ old('email') }}" required
                class="w-full border border-[#01E1FF] rounded-lg p-2 focus:ring-2 focus:ring-[#01E1FF] focus:outline-none"
                oninvalid="this.setCustomValidity('Silakan isi email yang valid')"
                oninput="this.setCustomValidity('')">

          @error('email')
              <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
          @enderror
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          {{-- PASSWORD --}}
          <div>
              <label class="block text-gray-700 mb-1">Kata Sandi</label>
              <input type="password" name="password" required minlength="6"
                    class="w-full border border-[#01E1FF] rounded-lg p-2 focus:ring-2 focus:ring-[#01E1FF] focus:outline-none"
                    oninvalid="this.setCustomValidity('Kata sandi minimal 6 karakter')"
                    oninput="this.setCustomValidity('')">

              @error('password')
                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
              @enderror
          </div>

          {{-- PASSWORD CONFIRM --}}
          <div>
              <label class="block text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
              <input type="password" name="password_confirmation" required minlength="6"
                    class="w-full border border-[#01E1FF] rounded-lg p-2 focus:ring-2 focus:ring-[#01E1FF] focus:outline-none"
                    oninvalid="this.setCustomValidity('Konfirmasi kata sandi minimal 6 karakter')"
                    oninput="this.setCustomValidity('')">

              @error('password_confirmation')
                  <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
              @enderror
          </div>
      </div>

      {{-- NO TELEPON --}}
      <div>
        <label class="block text-gray-700 mb-1">No. Telepon</label>
        <input
            type="tel"
            name="telpon"
            value="{{ old('telpon') }}"
            required
            inputmode="numeric"
            pattern="[0-9]+"
            placeholder="08xxxxxxxxxx"
            class="w-full border border-[#01E1FF] rounded-lg p-2 
                  focus:ring-2 focus:ring-[#01E1FF] focus:outline-none"
            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
            oninvalid="this.setCustomValidity('Silakan isi nomor telepon (angka saja)')"
            oninput="this.setCustomValidity('')"
        >

        @error('telpon')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

      {{-- TERMS --}}
      <div class="flex items-start space-x-2 mt-3">
          <input type="checkbox" name="terms" required
                class="mt-1 border-gray-300 rounded focus:ring-[#01E1FF]"
                oninvalid="this.setCustomValidity('Silakan setujui Ketentuan Layanan dan Kebijakan Privasi')"
                oninput="this.setCustomValidity('')">

          <label class="text-gray-700 text-sm">
              Saya menyetujui
              <a href="{{ route('terms') }}" target="_blank" class="text-[#01E1FF] font-semibold hover:underline">Ketentuan Layanan</a>
              dan
              <a href="{{ route('privacy') }}" target="_blank" class="text-[#01E1FF] font-semibold hover:underline">Kebijakan Privasi</a>
          </label>
      </div>

      {{-- BUTTON --}}
      <button type="submit"
              class="w-full text-white py-2 rounded-lg font-semibold transition-transform hover:scale-105 shadow-md"
              style="background-color:#01E1FF;">
          Daftar
      </button>
  </form>

      <div class="text-center mt-5 space-y-2">
        <p class="text-gray-600">
          Sudah punya akun?
          <a href="{{ route('login') }}" class="font-semibold hover:underline text-[#01E1FF]">Masuk</a>
        </p>
        <a href="/" class="inline-block text-[#01E1FF] font-semibold hover:underline">Kembali ke Beranda</a>
      </div>
    </div>
  </div>
</div>
@endsection