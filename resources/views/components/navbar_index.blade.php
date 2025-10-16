<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">

    <!-- Logo -->
    <a href="/index" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('images/logoasma.png') }}" class="h-8" alt="AsthmaCare Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap">AsthmaCare</span>
    </a>

    <!-- Menu Tengah (desktop) -->
    <ul class="hidden md:flex space-x-6 font-medium mx-auto">
      <li><a href="#" class="text-gray-900 hover:text-blue-700">Beranda</a></li>
      <li><a href="#" class="text-gray-900 hover:text-blue-700">Fitur</a></li>
      <li><a href="#" class="text-gray-900 hover:text-blue-700">Artikel</a></li>
      <li><a href="#" class="text-gray-900 hover:text-blue-700">Kontak</a></li>
    </ul>

    <!-- Tombol Daftar & Masuk (desktop) -->
    <div class="hidden md:flex space-x-4">
      <a href="{{ route('register') }}" class="py-2 px-4 text-gray-900 border border-black rounded-full hover:bg-gray-100">Daftar</a>
      <a href="{{ route('login') }}" class="py-2 px-4 text-white bg-cyan-400 rounded-full hover:bg-cyan-500">Masuk</a>
    </div>

    <!-- Hamburger button (mobile) -->
    <button id="mobile-menu-btn" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
      </svg>
    </button>

  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden w-full bg-gray-50 border-t border-gray-200">
    <ul class="flex flex-col space-y-2 p-4 font-medium">
      <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700">Beranda</a></li>
      <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700">Fitur</a></li>
      <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700">Artikel</a></li>
      <li><a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700">Kontak</a></li>
      <li><a href="{{ route('register') }}" class="block py-3 px-3 text-gray-900 border border-black rounded-full text-center hover:bg-gray-100">Daftar</a></li>
      <li><a href="{{ route('login') }}" class="block py-3 px-3 text-white bg-cyan-400 rounded-full text-center hover:bg-cyan-500">Masuk</a></li>
    </ul>
  </div>
</nav>

<script>
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
