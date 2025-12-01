@props(['user'])


<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" 
          class="bg-white shadow-lg rounded-2xl w-11/12 md:w-3/4 mx-auto p-8 flex flex-col md:flex-row justify-between items-start border border-gray-100">
        @csrf

        {{-- FORM INFORMASI --}}
        <div class="w-full md:w-2/3 pr-0 md:pr-10">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Informasi Akun</h2>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ $user->name }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Username</label>
                <input type="text" name="username" value="{{ $user->username }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">No. Telepon</label>
                <input type="text" name="telpon" value="{{ $user->telpon }}" 
                       class="w-full border border-gray-300 rounded-full px-4 py-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
            </div>

            <button type="submit" 
                    class="mt-4 bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] text-white font-semibold px-6 py-2 rounded-full shadow hover:from-[#0097a7] hover:to-[#55c6ff] transition">
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
                class="cursor-pointer bg-gradient-to-r from-[#00bcd4] to-[#7fdbff] border border-gray-300 px-4 py-1 rounded-full text-sm text-white font-medium hover:from-[#0097a7] hover:to-[#55c6ff] transition">
                Ubah Foto
            </label>

            <input type="file" id="photo" name="photo" class="hidden" accept="image/*"
                onchange="previewImage(event)">
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
</form>