<section data-step="6" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Alergi utama apa yang Anda miliki?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Allergies" value="None"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Allergies') == 'None' ? 'checked' : '' }}
                   required>
            <span>Tidak ada alergi yang diketahui</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Allergies" value="Dust"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Allergies') == 'Dust' ? 'checked' : '' }}>
            <span>Alergi debu</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Allergies" value="Pollen"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Allergies') == 'Pollen' ? 'checked' : '' }}>
            <span>Alergi serbuk sari/tanaman</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Allergies" value="Pets"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Allergies') == 'Pets' ? 'checked' : '' }}>
            <span>Alergi hewan peliharaan (bulu, dll)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Allergies" value="Multiple"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Allergies') == 'Multiple' ? 'checked' : '' }}>
            <span>Beberapa alergi sekaligus</span>
        </label>
    </div>
</section>
