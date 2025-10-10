<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar | AsthmaCare</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'League Spartan', sans-serif;
      background: linear-gradient(45deg, #01E1FF, #7fdbff, #a7ffeb, #e0f7fa);
      background-size: 400% 400%;
      animation: gradientMove 8s ease infinite;
      overflow: hidden;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

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
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 8px 30px rgba(1, 225, 255, 0.25);
      z-index: 10;
    }

    .btn-glow:hover {
      box-shadow: 0 0 15px rgba(1, 225, 255, 0.6);
      transform: scale(1.05);
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="flex items-center justify-center min-h-screen relative">

  <!-- Efek bintang -->
  <div class="stars">
    @for ($i = 0; $i < 30; $i++)
      <span style="top:{{ rand(0,100) }}%; left:{{ rand(0,100) }}%; animation-delay:{{ rand(0,5) }}s;"></span>
    @endfor
  </div>

  <div class="flex w-[850px] rounded-2xl overflow-hidden shadow-xl card relative">
    <!-- Left -->
    <div class="w-1/2 flex flex-col justify-center items-center p-8 text-center" style="background-color: #C3F7FF;">
      <img src="{{ asset('images/logoasma.png') }}" alt="Logo" class="w-36 mb-6 drop-shadow-lg">
      <h2 class="text-2xl font-bold mb-3" style="color: #01E1FF;">Daftar di AsthmaCare</h2>
      <p class="text-gray-600 text-base">Mulai hidup sehat dengan pemantauan asma yang lebih cerdas dan mudah</p>
    </div>

    <!-- Right -->
    <div class="w-1/2 p-10 flex flex-col justify-center">
      <h3 class="text-2xl font-semibold mb-6 text-center" style="color: #01E1FF;">Buat Akun Baru</h3>
      
      <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-gray-700 mb-1">Nama Lengkap</label>
            <input type="text" name="name" required class="w-full border rounded-lg p-2 focus:ring-2 focus:outline-none" style="border-color:#01E1FF; focus:ring-color:#01E1FF;">
          </div>
          <div>
            <label class="block text-gray-700 mb-1">Username</label>
            <input type="text" name="username" required class="w-full border rounded-lg p-2 focus:ring-2 focus:outline-none" style="border-color:#01E1FF;">
          </div>
        </div>

        <div>
          <label class="block text-gray-700 mb-1">Email</label>
          <input type="email" name="email" required class="w-full border rounded-lg p-2 focus:ring-2 focus:outline-none" style="border-color:#01E1FF;">
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-gray-700 mb-1">Kata Sandi</label>
            <input type="password" name="password" required class="w-full border rounded-lg p-2 focus:ring-2 focus:outline-none" style="border-color:#01E1FF;">
          </div>
          <div>
            <label class="block text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
            <input type="password" name="password_confirmation" required class="w-full border rounded-lg p-2 focus:ring-2 focus:outline-none" style="border-color:#01E1FF;">
          </div>
        </div>

        <div>
          <label class="block text-gray-700 mb-1">No. Telepon</label>
          <input type="text" name="telpon" required class="w-full border rounded-lg p-2 focus:ring-2 focus:outline-none" style="border-color:#01E1FF;">
        </div>

        <button type="submit" class="w-full text-white py-2 rounded-lg font-semibold btn-glow" style="background-color:#01E1FF;">
          Daftar
        </button>
      </form>

      <div class="text-center mt-5">
        <p class="text-gray-600">
          Sudah punya akun?
          <a href="{{ route('login') }}" class="font-semibold hover:underline" style="color:#01E1FF;">Masuk</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
