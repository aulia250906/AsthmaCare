<section data-step="9" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Dalam keseharian Anda, aktivitas utama lebih sering dilakukan di lingkungan seperti apa?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Occupation_Type" value="Indoor"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Occupation_Type') == 'Indoor' ? 'checked' : '' }}
                   required>
            <span>Di dalam ruangan (misalnya ruang kelas, rumah, atau kantor)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Occupation_Type" value="Outdoor"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Occupation_Type') == 'Outdoor' ? 'checked' : '' }}>
            <span>Di luar ruangan (misalnya lapangan, halaman, atau area terbuka)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Occupation_Type" value="Both"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Occupation_Type') == 'Both' ? 'checked' : '' }}>
            <span>Kombinasi di dalam dan di luar</span>
        </label>
    </div>
</section>
