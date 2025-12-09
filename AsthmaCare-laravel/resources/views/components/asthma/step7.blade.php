<section data-step="7" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Bagaimana tingkat paparan polusi udara di lingkungan tempat Anda tinggal/bekerja?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Air_Pollution_Level" value="Low"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Air_Pollution_Level') == 'Low' ? 'checked' : '' }}
                   required>
            <span>Rendah (udara relatif bersih)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Air_Pollution_Level" value="Moderate"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Air_Pollution_Level') == 'Moderate' ? 'checked' : '' }}>
            <span>Sedang</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Air_Pollution_Level" value="High"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Air_Pollution_Level') == 'High' ? 'checked' : '' }}>
            <span>Tinggi (dekat jalan besar/pabrik, sering berasap)</span>
        </label>
    </div>
</section>
