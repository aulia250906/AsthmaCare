<!-- Navbar -->
<nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center relative">
  <!-- Logo -->
  <div class="flex items-center space-x-2">
    <img src="images/logoasma.png" class="w-8" alt="Logo" />
    <span class="font-bold text-xl text-gray-800">AsthmaCare</span>
  </div>

  <!-- Menu Desktop -->
  <ul class="hidden md:flex gap-6 text-gray-700 font-medium">
    <li><a href="/home" class="hover:text-blue-500 transition-colors">Beranda</a></li>
    <li><a href="/artikel" class="hover:text-blue-500 transition-colors">Artikel</a></li>
    <li><a href="/kontak" class="hover:text-blue-500 transition-colors">Kontak</a></li>
    <li><a href="/riwayat" class="hover:text-blue-500 transition-colors">Riwayat</a></li>
  </ul>

  <!-- Bagian kanan -->
  <div class="flex items-center gap-4">
    <!-- Dropdown Profil -->
    <div class="relative">
      <button id="profile-btn" class="w-9 h-9 rounded-full bg-gray-200 flex items-center justify-center hover:bg-gray-300 transition">
        <i class="fas fa-user text-blue-500"></i>
      </button>

      <div id="profile-menu"
           class="absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-lg shadow-lg py-2 transform scale-95 opacity-0 transition-all duration-300 ease-out origin-top hidden">
        <a href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-blue-50">Profil</a>
         <form method="POST" action="/logout" class="block">
          @csrf
          <button
            type="submit"
            class="w-full text-left px-4 py-2 text-gray-700 hover:bg-blue-50">Logout</button>
          </form>
      </div>
    </div>

    <!-- Tombol Hamburger -->
    <button id="menu-btn" class="md:hidden text-gray-700 text-xl focus:outline-none">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- Menu Mobile -->
<div id="menu-mobile"
     class="hidden md:hidden bg-white shadow-md overflow-hidden transform scale-95 opacity-0 transition-all duration-300 ease-out">
  <ul class="flex flex-col items-center gap-4 py-4 text-gray-700 font-medium">
    <li><a href="/home" class="hover:text-blue-500 transition-colors">Beranda</a></li>
    <li><a href="/artikel" class="hover:text-blue-500 transition-colors">Artikel</a></li>
    <li><a href="/kontak" class="hover:text-blue-500 transition-colors">Kontak</a></li>
    <li><a href="/riwayat" class="hover:text-blue-500 transition-colors">Riwayat</a></li>
  </ul>
</div>

<script>
  const menuBtn = document.getElementById("menu-btn");
  const menuMobile = document.getElementById("menu-mobile");
  const profileBtn = document.getElementById("profile-btn");
  const profileMenu = document.getElementById("profile-menu");

  // Toggle menu mobile
  menuBtn.onclick = () => {
    const isHidden = menuMobile.classList.contains("hidden");
    if (isHidden) {
      menuMobile.classList.remove("hidden");
      setTimeout(() => {
        menuMobile.classList.remove("scale-95", "opacity-0");
      }, 10);
    } else {
      menuMobile.classList.add("scale-95", "opacity-0");
      setTimeout(() => menuMobile.classList.add("hidden"), 300);
    }
  };

  // Toggle dropdown profil
  profileBtn.onclick = () => {
    const isHidden = profileMenu.classList.contains("hidden");
    if (isHidden) {
      profileMenu.classList.remove("hidden");
      setTimeout(() => {
        profileMenu.classList.remove("scale-95", "opacity-0");
      }, 10);
    } else {
      profileMenu.classList.add("scale-95", "opacity-0");
      setTimeout(() => profileMenu.classList.add("hidden"), 300);
    }
  };

  // Tutup dropdown kalau klik di luar
  document.addEventListener("click", (e) => {
    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
      profileMenu.classList.add("scale-95", "opacity-0");
      setTimeout(() => profileMenu.classList.add("hidden"), 300);
    }
  });
</script>
