<nav class="bg-white fixed w-full top-0 left-0 z-50 border-b border-gray-200 shadow-sm">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">

    <!-- Logo -->
    <a href="/index" class="flex items-center space-x-3">
      <img src="{{ asset('images/logoasma.png') }}" class="h-8" alt="AsthmaCare Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap">AsthmaCare</span>
    </a>

    <!-- Menu Tengah (desktop) -->
    <ul class="hidden md:flex space-x-6 font-medium mx-auto">
      <li><a href="/#beranda" class="text-gray-900 hover:text-blue-700 transition-colors">Beranda</a></li>
      <li><a href="/#fitur" class="text-gray-900 hover:text-blue-700 transition-colors">Fitur</a></li>
      <li><a href="/artikel" class="text-gray-900 hover:text-blue-700 transition-colors">Artikel</a></li>
      <li><a href="#kontak" class="text-gray-900 hover:text-blue-700 transition-colors">Kontak</a></li>
    </ul>

    <!-- Tombol Daftar & Masuk -->
    <div class="hidden md:flex space-x-4">
      <a href="{{ route('register') }}"
         class="py-2 px-6 text-gray-900 font-semibold border border-black rounded-xl 
                shadow-[-4px_4px_0px_rgba(0,0,0,1)] 
                hover:translate-x-[-2px] hover:translate-y-[2px] 
                hover:shadow-[-2px_2px_0px_rgba(0,0,0,1)] 
                hover:bg-gray-100 transition duration-200 ease-in-out">
        Daftar
      </a>
      <a href="{{ route('login') }}"
         class="py-2 px-6 text-white font-semibold bg-cyan-400 border border-black rounded-xl 
                shadow-[-4px_4px_0px_rgba(0,0,0,1)] 
                hover:translate-x-[-2px] hover:translate-y-[2px] 
                hover:shadow-[-2px_2px_0px_rgba(0,0,0,1)] 
                hover:bg-cyan-500 transition duration-200 ease-in-out">
        Masuk
      </a>
    </div>

    <!-- Tombol Hamburger (mobile) -->
    <button id="mobile-menu-btn" type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
      <span class="sr-only">Open main menu</span>
      <svg id="hamburger-icon" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15" />
      </svg>
      <svg id="close-icon" class="w-5 h-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Menu Mobile -->
  <div id="mobile-menu"
    class="hidden md:hidden bg-gray-50 border-t border-gray-200 overflow-hidden transform scale-95 opacity-0 transition-all duration-300 ease-in-out">
    <ul class="flex flex-col items-center text-center space-y-3 p-4 font-medium">
      <li><a href="/#beranda" class="block py-2 px-3 text-gray-900 hover:text-blue-700 transition">Beranda</a></li>
      <li><a href="/#fitur" class="block py-2 px-3 text-gray-900 hover:text-blue-700 transition">Fitur</a></li>
      <li><a href="/artikel" class="block py-2 px-3 text-gray-900 hover:text-blue-700 transition">Artikel</a></li>
      <li><a href="#kontak" class="block py-2 px-3 text-gray-900 hover:text-blue-700 transition">Kontak</a></li>
    </ul>

    <div class="flex flex-col sm:flex-row justify-center sm:justify-end items-center gap-3 p-4">
      <a href="{{ route('register') }}" class="w-full sm:w-auto py-3 px-5 text-gray-900 border border-black rounded-full hover:bg-gray-100 transition text-center">Daftar</a>
      <a href="{{ route('login') }}" class="w-full sm:w-auto py-3 px-5 text-white bg-cyan-400 rounded-full hover:bg-cyan-500 transition text-center">Masuk</a>
    </div>
  </div>
</nav>

<script>
  const btn = document.getElementById('mobile-menu-btn');
  const menu = document.getElementById('mobile-menu');
  const openIcon = document.getElementById('hamburger-icon');
  const closeIcon = document.getElementById('close-icon');

  btn.addEventListener('click', () => {
    const isHidden = menu.classList.contains('hidden');

    if (isHidden) {
      menu.classList.remove('hidden');
      setTimeout(() => {
        menu.classList.remove('scale-95', 'opacity-0');
      }, 10);
      openIcon.classList.add('hidden');
      closeIcon.classList.remove('hidden');
    } else {
      menu.classList.add('scale-95', 'opacity-0');
      openIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
      setTimeout(() => menu.classList.add('hidden'), 300);
    }
  });
</script>
