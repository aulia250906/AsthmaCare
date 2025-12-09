@extends('layout.app')

@section('title', 'Masuk')

@section('content')

{{-- Toast Notification --}}
@if (session('success'))
    <div id="toast-success"
         class="fixed top-5 right-5 z-50 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg opacity-0 transform translate-x-5 transition-all duration-500 flex items-center gap-2">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 13l4 4L19 7"/>
        </svg>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div id="toast-error"
         class="fixed top-5 right-5 z-50 bg-red-500 text-white px-4 py-3 rounded-lg shadow-lg opacity-0 transform translate-x-5 transition-all duration-500 flex items-center gap-2">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"/>
        </svg>
        <span>{{ session('error') }}</span>
    </div>
@endif

<div class="py-8 relative min-h-screen flex items-center justify-center bg-gradient-to-br from-cyan-400 via-sky-200 to-cyan-100 animate-[gradientMove_8s_ease_infinite] overflow-x-hidden overflow-y-auto font-['League_Spartan']">

  <!-- Efek bintang -->
  <div class="absolute inset-0 z-0 overflow-hidden">
    @for ($i = 0; $i < 30; $i++)
      <span class="absolute block w-[3px] h-[3px] bg-white opacity-70 rounded-full animate-[sparkle_5s_linear_infinite]"
        style="top:{{ rand(0,100) }}%; left:{{ rand(0,100) }}%; animation-delay:{{ rand(0,5) }}s;"></span>
    @endfor
  </div>

  <!-- Kontainer utama -->
  <div class="relative z-10 flex flex-col md:flex-row w-[90%] md:w-[850px] rounded-2xl overflow-hidden shadow-xl backdrop-blur-lg bg-white/85 border border-cyan-100">

    <!-- Kiri -->
    <div class="w-full md:w-1/2 bg-cyan-100 flex flex-col justify-center items-center text-center p-6 md:p-8">
      <img src="{{ asset('images/logoasma.png') }}" alt="Logo" class="w-28 md:w-36 mb-4 md:mb-6 drop-shadow-lg">
      <h2 class="text-xl md:text-2xl font-bold mb-2 md:mb-3 text-[#01E1FF]">
        Selamat Datang di AsthmaCare
      </h2>
      <p class="text-gray-600 text-sm md:text-base">
        Pantau, lindungi, dan atur kesehatan pernapasan Anda dengan lebih mudah
      </p>
    </div>

    <!-- Kanan -->
    <div class="w-full md:w-1/2 p-6 md:p-10 flex flex-col justify-center">
      <h3 class="text-xl md:text-2xl font-semibold mb-6 text-center text-[#01E1FF]">Masuk ke Akun Anda</h3>

      <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="block text-gray-700 mb-1">Email</label>
          <input type="email" name="email" required
            class="w-full border border-cyan-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-400 focus:outline-none"
            oninvalid="this.setCustomValidity('Silakan isi email Anda')"
            oninput="this.setCustomValidity('')">
        </div>

        <div>
          <label class="block text-gray-700 mb-1">Kata Sandi</label>
          <input type="password" name="password" required
            class="w-full border border-cyan-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-400 focus:outline-none"
            oninvalid="this.setCustomValidity('Silakan isi kata sandi Anda')"
            oninput="this.setCustomValidity('')">
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="text-gray-600 flex items-center">
            <input type="checkbox" class="mr-1"> Ingat saya
          </label>
          <a href="#" class="text-cyan-700 hover:underline">Lupa sandi?</a>
        </div>

        <button type="submit"
          class="w-full py-2 rounded-lg font-semibold text-white bg-[#01E1FF] hover:shadow-[0_0_15px_rgba(0,200,255,0.6)] hover:scale-105 transition-all duration-300 ease-in-out">
          Masuk
        </button>

        <a href="{{ route('google.login') }}"
          class="w-full bg-white border border-gray-300 py-2 rounded-lg font-semibold flex items-center justify-center gap-2 hover:shadow-md transition">
          <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5">
          <span>Masuk dengan Google</span>
        </a>
      </form>

      <div class="text-center mt-6 space-y-2">
        <p class="text-gray-600">
          Belum punya akun?
          <a href="{{ route('register') }}" class="text-cyan-700 font-semibold hover:underline">Daftar</a>
        </p>

        <a href="/" class="inline-block text-[#01E1FF] font-semibold hover:underline">
          Kembali ke Beranda
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Animasi gradient & bintang -->
<style>
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
@keyframes sparkle {
  0% { transform: translateY(0px) scale(1); opacity: 0.6; }
  50% { transform: translateY(-10px) scale(1.3); opacity: 1; }
  100% { transform: translateY(0px) scale(1); opacity: 0.6; }
}
</style>

<script>
window.addEventListener('DOMContentLoaded', () => {
    const toasts = [
        document.getElementById('toast-success'),
        document.getElementById('toast-error'),
    ];

    toasts.forEach((toast) => {
        if (!toast) return;

        // Muncul
        setTimeout(() => {
            toast.classList.remove('opacity-0', 'translate-x-5');
            toast.classList.add('opacity-100', 'translate-x-0');
        }, 100);

        // Hilang otomatis setelah 3 detik
        setTimeout(() => {
            toast.classList.add('opacity-0', 'translate-x-5');
        }, 3000);

        // Hapus dari DOM setelah animasi selesai
        setTimeout(() => {
            toast.remove();
        }, 3700);
    });
});
</script>

@endsection
