<div class="flex justify-between items-center w-11/12 md:w-3/4 mx-auto mb-8">
    <h1 class="text-2xl font-semibold text-gray-800">
            Halo, {{ Auth::user()->name ?? 'Pengguna' }} 👋
        </h1>

        <a href="{{ route('home') }}" 
           class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-5 py-2 rounded-xl shadow hover:from-[#0097a7] hover:to-[#55c6ff] transition">
            Kembali ke Beranda
    </a>
</div>