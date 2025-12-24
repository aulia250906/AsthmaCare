<section data-step="5" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Apakah terdapat riwayat asma pada keluarga kandung Anda?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Family_History" value="0"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Family_History') == '0' ? 'checked' : '' }}
                   required>
            <span>Tidak ada</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Family_History" value="1"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Family_History') == '1' ? 'checked' : '' }}>
            <span>Ya, ada riwayat asma di keluarga</span>
        </label>
    </div>
</section>
