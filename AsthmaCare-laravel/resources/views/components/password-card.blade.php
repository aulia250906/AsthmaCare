<div class="bg-white shadow-xl rounded-2xl w-11/12 md:w-3/4 mx-auto p-8 mt-10 border border-gray-100 hover:shadow-2xl transition">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Ganti Kata Sandi</h2>

        <div class="p-6">
            <form action="{{ route('profile.password') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Password Lama</label>
                    <input type="password" name="old_password" 
                           class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Password Baru</label>
                    <input type="password" name="new_password" 
                           class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
                </div>

                <div>
                    <label class="block text-gray-700 font-medium mb-1">Konfirmasi Password Baru</label>
                    <input type="password" name="confirm_password" 
                           class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-cyan-300 focus:outline-none">
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-[#00bcd4] to-[#01E1FF] text-white font-semibold py-2 rounded-lg shadow hover:from-[#0097a7] hover:to-[#55c6ff] transition">
                    Perbarui Password
                </button>
            </form>
        </div>
    </div>