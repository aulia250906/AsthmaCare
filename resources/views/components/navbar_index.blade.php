<nav class="flex justify-between items-center py-4 px-8 bg-white shadow-sm">
    <div class="flex items-center space-x-2">
        <img src="{{ asset('images/logoasma.png') }}" alt="AsthmaCare Logo" class="h-8 w-auto">
        <span class="text-xl font-bold text-gray-800">AsthmaCare</span>
    </div>

    <ul class="flex space-x-8 text-gray-800 font-medium">
        <li><a href="#beranda" class="hover:text-blue-500">Beranda</a></li>
        <li><a href="#fitur" class="hover:text-blue-500">Fitur</a></li>
        <li><a href="#artikel" class="hover:text-blue-500">Artikel</a></li>
        <li><a href="#kontak" class="hover:text-blue-500">Kontak</a></li>
    </ul>

    <div class="flex items-center space-x-3">
        <a href="{{ route('register') }}" class="border border-gray-800 text-gray-900 font-semibold px-4 py-2 rounded-lg hover:bg-gray-100 transition">Daftar</a>
        <a href="{{ route('login') }}" class="bg-sky-400 text-white font-semibold px-4 py-2 rounded-lg hover:bg-sky-500 transition">Masuk</a>
    </div>
</nav>