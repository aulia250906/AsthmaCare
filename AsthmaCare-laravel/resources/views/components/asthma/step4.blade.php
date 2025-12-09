<section data-step="4" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Bagaimana status merokok Anda saat ini?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Smoking_Status" value="Never"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Smoking_Status') == 'Never' ? 'checked' : '' }}
                   required>
            <span>Tidak pernah merokok</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Smoking_Status" value="Former"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Smoking_Status') == 'Former' ? 'checked' : '' }}>
            <span>Pernah merokok, sekarang berhenti</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Smoking_Status" value="Current"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Smoking_Status') == 'Current' ? 'checked' : '' }}>
            <span>Saat ini masih merokok</span>
        </label>
    </div>
</section>
