@extends('layout.app')

@section('title', 'Ulasan Pengguna')

@section('content')

{{-- Navbar tampil sesuai status login --}}
    @auth
        <x-navbar /> {{-- Navbar setelah login --}}
    @else
        <x-navbar_index /> {{-- Navbar sebelum login --}}
    @endauth

<body class="bg-gradient-to-b from-[#e0f7fa] via-white to-[#f5ffff] min-h-screen py-12">

  {{-- ALERT SUKSES --}}
  @if(session('success'))
      <div id="alert-success" 
           class="mx-auto mb-6 w-11/12 md:w-3/4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow text-center animate-fade-in">
          <strong class="font-semibold">Berhasil!</strong> {{ session('success') }}
      </div>
      <script>
          setTimeout(() => {
              const alert = document.getElementById('alert-success');
              if (alert) alert.style.display = 'none';
          }, 3000);
      </script>
  @endif

{{-- HEADER --}}
<header class="text-center w-11/12 md:w-3/4 mx-auto mt-24 mb-10">
    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3 tracking-wide">
        ✨ Ulasan Pengguna
    </h1>
    <p class="text-gray-600 text-base md:text-lg leading-relaxed">
        Bagikan pendapatmu tentang aplikasi ini dan lihat pengalaman pengguna lainnya 💭
    </p>
</header>

  {{-- FORM TAMBAH ULASAN --}}
  <section class="w-11/12 md:w-3/4 mx-auto mb-10 bg-white/70 backdrop-blur-lg border border-gray-200 rounded-2xl shadow-xl p-8 animate-fade-in">
      <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Tulis Ulasanmu</h2>

      <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6">
          @csrf

          {{-- Nama --}}
          <div>
              <label class="block text-gray-700 font-medium mb-1">Nama</label>
              <input type="text" name="name" required
                     class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-cyan-400 focus:outline-none">
          </div>

          {{-- RATING BINTANG --}}
          <div>
              <label class="block text-gray-700 font-medium mb-1">Rating</label>
              <div id="starRating" class="flex justify-center md:justify-start space-x-2 text-3xl cursor-pointer text-gray-300 select-none">
                  @for($i = 1; $i <= 5; $i++)
                      <span onclick="setRating({{ $i }})" id="star{{ $i }}">★</span>
                  @endfor
              </div>
              <input type="hidden" name="rating" id="rating" required>
          </div>

          {{-- Komentar --}}
          <div>
              <label class="block text-gray-700 font-medium mb-1">Komentar</label>
              <textarea name="comment" required rows="4" maxlength="300"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-cyan-400 focus:outline-none"></textarea>
          </div>

          {{-- Tombol Submit --}}
          <div class="text-center">
              <button type="submit" 
                      class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-8 py-2 rounded-full shadow hover:scale-105 hover:from-[#0097a7] hover:to-[#55c6ff] transition">
                  Kirim Ulasan
              </button>
          </div>
      </form>
  </section>

@auth
    <x-footer />
@else
    <x-footer_index />
@endauth

  {{-- ANIMASI CSS --}}
  <style>
      @keyframes fadeIn {
          from { opacity: 0; transform: translateY(10px); }
          to { opacity: 1; transform: translateY(0); }
      }
      .animate-fade-in { animation: fadeIn 0.8s ease-in-out; }
      .animate-slide-up { animation: fadeIn 0.7s ease-out; }

      /* Bintang interaktif */
      #starRating span {
          transition: transform 0.2s, color 0.2s;
      }
      #starRating span:hover {
          transform: scale(1.2);
      }
  </style>

  {{-- SCRIPT UNTUK BINTANG --}}
  <script>
      let currentRating = 0;

      function setRating(value) {
          currentRating = value;
          document.getElementById('rating').value = value;

          for (let i = 1; i <= 5; i++) {
              const star = document.getElementById('star' + i);
              if (i <= value) {
                  star.classList.add('text-cyan-400');
                  star.classList.remove('text-gray-300');
              } else {
                  star.classList.add('text-gray-300');
                  star.classList.remove('text-cyan-400');
              }
          }
      }
  </script>

</body>
@endsection