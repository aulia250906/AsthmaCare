<section data-step="10" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Apakah Anda memiliki penyakit penyerta (komorbiditas) berikut?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Comorbidities" value="0"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Comorbidities') == '0' ? 'checked' : '' }}
                   required>
            <span>Tidak ada penyakit penyerta</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Comorbidities" value="Diabetes"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Comorbidities') == 'Diabetes' ? 'checked' : '' }}>
            <span>Diabetes</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Comorbidities" value="Hypertension"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Comorbidities') == 'Hypertension' ? 'checked' : '' }}>
            <span>Hipertensi (tekanan darah tinggi)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Comorbidities" value="COPD"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Comorbidities') == 'COPD' ? 'checked' : '' }}>
            <span>Penyakit paru obstruktif kronis (PPOK/COPD)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Comorbidities" value="Multiple"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Comorbidities') == 'Multiple' ? 'checked' : '' }}>
            <span>Lebih dari satu komorbiditas</span>
        </label>
    </div>
</section>
