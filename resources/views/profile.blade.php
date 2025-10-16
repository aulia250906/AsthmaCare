@extends('layout.app')

@section('title', 'Profil Saya')

@section('content')
<body class="bg-gray-50 min-h-screen py-10">

    {{-- ALERT SUKSES --}}
    @if(session('success'))
        <div id="alert-success" 
             class="mx-auto mb-6 w-11/12 md:w-3/4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow text-center transition-all duration-500">
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
    <div class="flex justify-between items-center w-11/12 md:w-3/4 mx-auto mb-8">
        <h1 class="text-2xl font-semibold text-gray-800">
            Halo, {{ Auth::user()->name ?? 'Pengguna' }} 👋
        </h1>

        <a href="{{ route('home') }}" 
           class="bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-5 py-2 rounded-xl shadow hover:opacity-90 transition">
            Kembali ke Beranda
        </a>
    </div>

    {{-- FORM PROFIL (SATU FORM UNTUK SEMUA DATA) --}}
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" 
          class="bg-white shadow-lg rounded-2xl w-11/12 md:w-3/4 mx-auto p-8 flex flex-col md:flex-row justify-between items-start border border-gray-100">
        @csrf

        {{-- FORM INFORMASI --}}
        <div class="w-full md:w-2/3 pr-0 md:pr-10">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Informasi Akun</h2>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ $user->name }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Username</label>
                <input type="text" name="username" value="{{ $user->username }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">No. Telepon</label>
                <input type="text" name="telpon" value="{{ $user->telpon }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300">
            </div>

            <button type="submit" 
                    class="mt-4 bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-6 py-2 rounded-full shadow hover:opacity-90 transition">
                Simpan Perubahan
            </button>
        </div>

        {{-- FOTO PROFIL --}}
        <div class="flex flex-col items-center mt-8 md:mt-0 md:w-1/3">
            <h2 class="text-sm font-semibold text-gray-800 mb-2">Foto Profil</h2>

            @php
                // Cek apakah foto dari Google atau dari storage
                $photo = $user->photo;
                $isGooglePhoto = Str::startsWith($photo, 'http');
            @endphp

            <img id="preview-image"
                src="{{ $photo 
                        ? ($isGooglePhoto 
                            ? $photo 
                            : asset('storage/' . $photo)) 
                        : asset('images/default-user.png') }}"
                class="w-32 h-32 rounded-full object-cover border-4 border-[#00bcd4] shadow mb-3">

            <label for="photo"
                class="cursor-pointer bg-white border border-gray-300 px-4 py-1 rounded-full text-sm text-gray-700 font-medium hover:bg-gray-100 transition">
                Ubah Foto
            </label>

            <input type="file" id="photo" name="photo" class="hidden" accept="image/*"
                onchange="previewImage(event)">
        </div>
    </form>

    {{-- CARD GANTI PASSWORD --}}
    <div class="bg-white shadow-xl rounded-2xl w-11/12 md:w-3/4 mx-auto p-8 mt-10 border border-gray-100 hover:shadow-2xl transition">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Ganti Kata Sandi</h2>

        <div class="p-6">
            <form action="{{ route('profile.password') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Password Lama</label>
                    <input type="password" name="old_password" 
                           class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-300">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Password Baru</label>
                    <input type="password" name="new_password" 
                           class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-300">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Konfirmasi Password Baru</label>
                    <input type="password" name="confirm_password" 
                           class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-300">
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-[#00bcd4] to-[#a7ffeb] text-white font-semibold py-2 rounded-lg shadow hover:opacity-90 transition">
                    Perbarui Password
                </button>
            </form>
        </div>
    </div>

    {{-- SCRIPT PREVIEW FOTO --}}
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('preview-image');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>
@endsection
