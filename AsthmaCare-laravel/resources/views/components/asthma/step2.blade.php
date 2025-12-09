<section data-step="2" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
            Apa jenis kelamin Anda?
    </h2>

    <div class="space-y-4 text-lg">
        <label class="flex items-center space-x-3">
            <input type="radio" name="Gender" value="Male"
                class="w-5 h-5 rounded-full border-2 border-gray-300 
                appearance-none cursor-pointer
                checked:border-white checked:bg-cyan-300
                focus:outline-none focus:ring-2 focus:ring-cyan-300"
                {{ old('Gender') == 'Male' ? 'checked' : '' }}
                required>
            <span>Laki-laki</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Gender" value="Female"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Gender') == 'Female' ? 'checked' : '' }}>
            <span>Perempuan</span>
        </label>

        <label class="flex items-center space-x-3">
            <input type="radio" name="Gender" value="Other"
                   class="w-5 h-5 rounded-full border-2 border-gray-300 
                    appearance-none cursor-pointer
                    checked:border-white checked:bg-cyan-300
                    focus:outline-none focus:ring-2 focus:ring-cyan-300"
                   {{ old('Gender') == 'Other' ? 'checked' : '' }}>
            <span>Lainnya</span>
        </label>
    </div>
</section>
