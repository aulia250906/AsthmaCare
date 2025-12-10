<!-- Home -->

<!-- ✅ NAVBAR FIXED RESPONSIVE -->
<nav class="fixed top-0 left-0 w-full bg-white shadow-md px-6 py-4 flex justify-between items-center z-50">
  <!-- Logo -->
  <div class="flex items-center space-x-3">
    <img src="{{ asset('images/logoasma.png') }}" class="h-10" alt="Logo" />
    <span class="font-bold text-2xl text-gray-800">AsthmaCare</span>
  </div>

  <!-- Menu Desktop -->
  <ul class="hidden md:flex space-x-8 text-gray-900 font-medium">
    <li><a href="/home" class="hover:text-blue-700 transition-colors">Beranda</a></li>
    <li><a href="/artikel" class="hover:text-blue-700 transition-colors">Artikel</a></li>
    <li><a href="/ulasan" class="hover:text-blue-700 transition-colors">Ulasan</a></li>
    <li><a href="/riwayat" class="hover:text-blue-700 transition-colors">Riwayat</a></li>
    <li><a href="/dokter" class="hover:text-blue-700 transition-colors">Dokter</a></li>
  </ul>

  <!-- Bagian kanan -->
  <div class="flex items-center gap-3">
    @auth
    <div class="relative">
      <button id="profile-btn"
        class="w-9 h-9 rounded-full overflow-hidden bg-gray-200 flex items-center justify-center hover:ring-2 hover:ring-blue-400 transition">
        @php
          $user = Auth::user();
          $photoUrl = null;
          if ($user->photo) {
              if (Str::startsWith($user->photo, ['http://', 'https://'])) {
                  $photoUrl = $user->photo;
              } else {
                  $photoUrl = asset('storage/' . $user->photo);
              }
          }
        @endphp

        @if($photoUrl)
          <img src="{{ $photoUrl }}" alt="Profile Photo" class="w-full h-full object-cover">
        @else
          <i class="fas fa-user text-blue-500 text-lg"></i>
        @endif
      </button>

      <!-- Dropdown -->
      <div id="profile-menu"
           class="absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-lg shadow-lg py-2 transform scale-95 opacity-0 transition-all duration-300 ease-out origin-top hidden z-50">
        <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Profil</a>
        <form method="POST" action="/logout" class="block">
          @csrf
          <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-blue-50">Logout</button>
        </form>
      </div>
    </div>
    @else
    <div class="hidden md:flex items-center gap-3">
      <a href="/login" class="text-gray-700 hover:text-blue-500 font-medium">Login</a>
      <a href="/register" class="bg-blue-500 text-white px-4 py-1.5 rounded-lg hover:bg-blue-600 transition">Daftar</a>
    </div>
    @endauth

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
  </div>
</nav>

<!-- ✅ Menu Mobile -->
<div id="menu-mobile"
     class="hidden fixed top-[64px] left-0 w-full bg-white shadow-md md:hidden transform scale-95 opacity-0 transition-all duration-300 ease-out z-40">
  <ul class="flex flex-col items-center gap-4 py-4 text-gray-700 font-medium">
    <li><a href="/home" class="hover:text-blue-500 transition-colors">Beranda</a></li>
    <li><a href="/artikel" class="hover:text-blue-500 transition-colors">Artikel</a></li>
    <li><a href="/ulasan" class="hover:text-blue-500 transition-colors">Ulasan</a></li>
    <li><a href="/riwayat" class="hover:text-blue-500 transition-colors">Riwayat</a></li>
    <li><a href="/dokter" class="hover:text-blue-500 transition-colors">Dokter</a></li>

    @guest
    <div class="flex flex-col items-center gap-3 mt-2">
      <a href="/login" class="text-gray-700 hover:text-blue-500 font-medium">Login</a>
      <a href="/register" class="bg-blue-500 text-white px-4 py-1.5 rounded-lg hover:bg-blue-600 transition">Daftar</a>
    </div>
    @endguest
  </ul>
</div>

<!-- ✅ Spacer biar konten ga ketutup navbar -->
<div class="pt-20"></div>

<script>
  const menuBtn = document.getElementById("mobile-menu-btn");
  const menuMobile = document.getElementById("menu-mobile");
  const profileBtn = document.getElementById("profile-btn");
  const profileMenu = document.getElementById("profile-menu");
  const openIcon = document.getElementById("hamburger-icon");
  const closeIcon = document.getElementById("close-icon");

  // ✅ Toggle Menu Mobile
  if (menuBtn) {
    menuBtn.onclick = () => {
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
    };
  }

  // ✅ Toggle Dropdown Profile
  if (profileBtn) {
    profileBtn.onclick = (e) => {
      e.stopPropagation();
      const isHidden = profileMenu.classList.contains("hidden");
      if (isHidden) {
        profileMenu.classList.remove("hidden");
        setTimeout(() => profileMenu.classList.remove("scale-95", "opacity-0"), 10);
      } else {
        profileMenu.classList.add("scale-95", "opacity-0");
        setTimeout(() => profileMenu.classList.add("hidden"), 300);
      }
    };
  }

  // ✅ Tutup dropdown kalau klik di luar
  document.addEventListener("click", (e) => {
    if (profileMenu && !profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
      profileMenu.classList.add("scale-95", "opacity-0");
      setTimeout(() => profileMenu.classList.add("hidden"), 300);
    }
  });
</script>
