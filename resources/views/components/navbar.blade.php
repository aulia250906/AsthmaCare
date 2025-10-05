<nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
        <img src="{{ asset('images/logoasma.png') }}" alt="Logo" class="w-8">
        <span class="font-bold text-xl text-black-600">AsthmaCare</span>
    </div>

    <!-- Menu -->
    <ul class="flex gap-6 text-gray-700 font-medium">
        <li><a href="/" class="hover:text-blue-500 {{ request()->is('/') ? 'text-blue-500 font-semibold' : '' }}">Beranda</a></li>
        <li><a href="/artikel" class="hover:text-blue-500 {{ request()->is('artikel') ? 'text-blue-500 font-semibold' : '' }}">Artikel</a></li>
        <li><a href="/kontak" class="hover:text-blue-500 {{ request()->is('kontak') ? 'text-blue-500 font-semibold' : '' }}">Kontak</a></li>
        <li><a href="/riwayat" class="hover:text-blue-500 {{ request()->is('riwayat') ? 'text-blue-500 font-semibold' : '' }}">Riwayat</a></li>
    </ul>

    <!-- Profile Icon -->
    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">
        <i class="fas fa-user text-blue-500"></i>
    </div>
</nav>
