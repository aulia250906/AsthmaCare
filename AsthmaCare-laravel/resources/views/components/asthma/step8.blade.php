<section data-step="8" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Bagaimana tingkat aktivitas fisik Anda dalam keseharian?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Physical_Activity_Level" value="Sedentary"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Physical_Activity_Level') == 'Sedentary' ? 'checked' : '' }}
                   required>
            <span>Sangat kurang aktif (banyak duduk, jarang bergerak)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Physical_Activity_Level" value="Moderate"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Physical_Activity_Level') == 'Moderate' ? 'checked' : '' }}>
            <span>Aktivitas sedang (jalan kaki/olah raga ringan beberapa kali per minggu)</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Physical_Activity_Level" value="Active"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Physical_Activity_Level') == 'Active' ? 'checked' : '' }}>
            <span>Sangat aktif (sering olahraga/pekerjaan fisik berat)</span>
        </label>
    </div>
</section>
