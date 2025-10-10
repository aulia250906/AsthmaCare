@extends('layout.app')

@section('title', 'Masuk')

@section('content')
  <style>
    body {
      font-family: 'League Spartan', sans-serif;
      background: linear-gradient(-45deg, #00bcd4, #7fdbff, #a7ffeb, #e0f7fa);
      background-size: 400% 400%;
      animation: gradientMove 8s ease infinite;
      overflow: hidden;
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* animasi bintang */
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
      animation: sparkle 5s linear infinite;
      border-radius: 50%;
    }
    @keyframes sparkle {
      0% { transform: translateY(0px) scale(1); opacity: 0.6; }
      50% { transform: translateY(-10px) scale(1.3); opacity: 1; }
      100% { transform: translateY(0px) scale(1); opacity: 0.6; }
    }

    .card {
      backdrop-filter: blur(12px);
      background-color: rgba(255, 255, 255, 0.85);
      box-shadow: 0 8px 30px rgba(0, 200, 255, 0.25);
      z-index: 10;
    }
    .btn-glow:hover {
      box-shadow: 0 0 15px rgba(0, 200, 255, 0.6);
      transform: scale(1.05);
      transition: all 0.3s ease;
    }
  </style>

  <!-- Efek bintang -->
  <div class="stars">
    @for ($i = 0; $i < 30; $i++)
      <span style="top:{{ rand(0,100) }}%; left:{{ rand(0,100) }}%; animation-delay:{{ rand(0,5) }}s;"></span>
    @endfor
  </div>

  <div class="flex items-center justify-center min-h-screen relative">
    <div class="flex w-[850px] rounded-2xl overflow-hidden shadow-xl card relative">
      <!-- Left -->
      <div class="w-1/2 bg-cyan-100 flex flex-col justify-center items-center p-8 text-center">
        <img src="{{ asset('images/logoasma.png') }}" alt="Logo" class="w-36 mb-6 drop-shadow-lg">
        <h2 class="text-2xl font-bold mb-3" style="color: #01E1FF;">
          Selamat Datang di AsthmaCare
        </h2>
        <p class="text-gray-600 text-base">
          Pantau, lindungi, dan atur kesehatan pernapasan Anda dengan lebih mudah
        </p>
      </div>

      <!-- Right -->
      <div class="w-1/2 p-10 flex flex-col justify-center">
        <h3 class="text-2xl font-semibold mb-6 text-center" style="color: #01E1FF;">Masuk ke Akun Anda</h3>
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
          @csrf
          <div>
            <label class="block text-gray-700 mb-1">Email</label>
            <input type="email" name="email" required class="w-full border border-cyan-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
          </div>
          <div>
            <label class="block text-gray-700 mb-1">Kata Sandi</label>
            <input type="password" name="password" required class="w-full border border-cyan-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm text-gray-600"><input type="checkbox" class="mr-1">Ingat saya</label>
            <a href="#" class="text-cyan-700 text-sm hover:underline">Lupa sandi?</a>
          </div>

          <button type="submit"
            class="w-full text-white py-2 rounded-lg font-semibold btn-glow"
            style="background-color: #01E1FF;">
            Masuk
          </button>

          <a href="{{ route('google.login') }}" class="w-full bg-white border border-gray-300 py-2 rounded-lg font-semibold flex items-center justify-center gap-2 hover:shadow-md transition">
            <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="w-5">
            <span>Masuk dengan Google</span>
          </a>
        </form>

        <div class="text-center mt-5">
          <p class="text-gray-600">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="text-cyan-700 font-semibold hover:underline">Daftar</a>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
