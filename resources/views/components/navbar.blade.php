<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Responsif - AsthmaCare</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50">

  <!-- Navbar -->
  <nav x-data="{ open: false, userMenu: false }" class="bg-white shadow-md px-6 py-4 flex justify-between items-center relative">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <img src="images/logoasma.png" alt="Logo" class="w-8">
      <span class="font-bold text-xl text-black-600">AsthmaCare</span>
    </div>

    <!-- Menu Utama (Desktop) -->
    <ul class="hidden md:flex gap-6 text-gray-700 font-medium">
      <li><a href="/" class="hover:text-blue-500">Beranda</a></li>
      <li><a href="/artikel" class="hover:text-blue-500">Artikel</a></li>
      <li><a href="/kontak" class="hover:text-blue-500">Kontak</a></li>
      <li><a href="/riwayat" class="hover:text-blue-500">Riwayat</a></li>
    </ul>

    <!-- Bagian Kanan -->
    <div class="flex items-center gap-4">
      <!-- Ikon Profil -->
      <div class="relative">
        <button @click="userMenu = !userMenu" class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-300">
          <i class="fas fa-user text-blue-500"></i>
        </button>

        <!-- Dropdown Profil -->
        <div 
          x-show="userMenu" 
          @click.away="userMenu = false"
          x-transition
          class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50"
        >
          <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Profile</a>
          <a href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Logout</a>
        </div>
      </div>

      <!-- Tombol Hamburger (Mobile) -->
      <button @click="open = !open" class="md:hidden focus:outline-none text-gray-700">
        <i :class="open ? 'fas fa-times' : 'fas fa-bars'"></i>
      </button>
    </div>

    <!-- Menu Mobile -->
    <div 
      x-show="open"
      x-transition
      class="absolute top-full left-0 w-full bg-white shadow-md md:hidden"
    >
      <ul class="flex flex-col items-center gap-4 py-4 text-gray-700 font-medium">
        <li><a href="/" class="hover:text-blue-500">Beranda</a></li>
        <li><a href="/artikel" class="hover:text-blue-500">Artikel</a></li>
        <li><a href="/kontak" class="hover:text-blue-500">Kontak</a></li>
        <li><a href="/riwayat" class="hover:text-blue-500">Riwayat</a></li>
      </ul>
    </div>
  </nav>

</body>
</html>
