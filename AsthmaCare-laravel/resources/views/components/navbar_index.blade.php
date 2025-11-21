<!-- ✅ NAVBAR INDEX (Style dari Home) -->
<nav class="fixed top-0 left-0 w-full bg-white shadow-md px-6 py-4 flex justify-between items-center z-50 border-b border-gray-200">
  <!-- Logo -->
  <a href="/index" class="flex items-center space-x-3">
    <img src="{{ asset('images/logoasma.png') }}" class="h-10" alt="AsthmaCare Logo">
    <span class="text-2xl font-bold text-gray-800">AsthmaCare</span>
  </a>

  <!-- Menu Desktop -->
  <ul class="hidden md:flex space-x-8 text-gray-900 font-medium">
    <li><a href="/#beranda" class="hover:text-blue-700 transition-colors">Beranda</a></li>
    <li><a href="/#fitur" class="hover:text-blue-700 transition-colors">Fitur</a></li>
    <li><a href="/artikel" class="hover:text-blue-700 transition-colors">Artikel</a></li>
    <li><a href="/ulasan" class="hover:text-blue-700 transition-colors">Ulasan</a></li>
  </ul>

  <!-- Tombol kanan -->
  <div class="hidden md:flex items-center gap-3">
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

  <!-- Tombol Hamburger (Mobile) -->
  <button id="mobile-menu-btn" type="button"
    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open main menu</span>
    <svg id="hamburger-icon" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
      viewBox="0 0 17 14">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M1 1h15M1 7h15M1 13h15" />
    </svg>
    <svg id="close-icon" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
      viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>
</nav>

<!-- ✅ Menu Mobile -->
<div id="menu-mobile"
     class="hidden fixed top-[64px] left-0 w-full bg-white shadow-md md:hidden transform scale-95 opacity-0 transition-all duration-300 ease-out z-40 border-t border-gray-200">
  <ul class="flex flex-col items-center gap-4 py-4 text-gray-700 font-medium">
    <li><a href="/#beranda" class="hover:text-blue-500 transition-colors">Beranda</a></li>
    <li><a href="/#fitur" class="hover:text-blue-500 transition-colors">Fitur</a></li>
    <li><a href="/artikel" class="hover:text-blue-500 transition-colors">Artikel</a></li>
    <li><a href="/ulasan" class="hover:text-blue-500 transition-colors">Ulasan</a></li>

    <div class="flex flex-col items-center gap-3 mt-2">
      <a href="{{ route('register') }}" class="w-full sm:w-auto py-3 px-5 text-gray-900 border border-black rounded-full hover:bg-gray-100 transition text-center">Daftar</a>
      <a href="{{ route('login') }}" class="w-full sm:w-auto py-3 px-5 text-white bg-cyan-400 rounded-full hover:bg-cyan-500 transition text-center">Masuk</a>
    </div>
  </ul>
</div>

<!-- ✅ Spacer biar konten ga ketutup navbar -->
<div class="pt-20"></div>

<script>
  const menuBtn = document.getElementById("mobile-menu-btn");
  const menuMobile = document.getElementById("menu-mobile");
  const openIcon = document.getElementById("hamburger-icon");
  const closeIcon = document.getElementById("close-icon");

  // ✅ Toggle Menu Mobile
  menuBtn.addEventListener("click", () => {
    const isHidden = menuMobile.classList.contains("hidden");
    if (isHidden) {
      menuMobile.classList.remove("hidden");
      openIcon.classList.add("hidden");
      closeIcon.classList.remove("hidden");
      setTimeout(() => menuMobile.classList.remove("scale-95", "opacity-0"), 10);
    } else {
      menuMobile.classList.add("scale-95", "opacity-0");
      openIcon.classList.remove("hidden");
      closeIcon.classList.add("hidden");
      setTimeout(() => menuMobile.classList.add("hidden"), 300);
    }
  });
</script>
