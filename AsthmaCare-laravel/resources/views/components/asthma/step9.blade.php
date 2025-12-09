<section data-step="9" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Jenis lingkungan kerja utama Anda saat ini?
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
            <span>Indoor (lebih banyak di dalam ruangan, misalnya kantor)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Occupation_Type" value="Outdoor"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Occupation_Type') == 'Outdoor' ? 'checked' : '' }}>
            <span>Outdoor (lebih banyak di luar ruangan, misalnya lapangan/industri)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Occupation_Type" value="Both"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Occupation_Type') == 'Both' ? 'checked' : '' }}>
            <span>Kombinasi indoor dan outdoor</span>
        </label>
    </div>
</section>
