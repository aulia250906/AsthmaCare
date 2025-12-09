<section data-step="3" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Berapa tinggi dan berat badan Anda?
    </h2>

    <p class="text-sm text-gray-600 mb-3">
        BMI akan dihitung otomatis dari tinggi dan berat badan Anda.
    </p>

    <div class="space-y-4 text-lg">
        {{-- Tinggi badan --}}
        <div>
            <label class="block mb-1 font-medium text-gray-800">
                Tinggi Badan (cm)
            </label>
            <input type="number"
                   name="Height"
                   min="50" max="250"
                   value="{{ old('Height') }}"
                   class="w-full border border-gray-300 rounded-xl px-4 py-2 text-lg 
                          focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
                   placeholder="Masukkan tinggi badan Anda (dalam cm)"
                   required>
        </div>

        {{-- Berat badan --}}
        <div>
            <label class="block mb-1 font-medium text-gray-800">
                Berat Badan (kg)
            </label>
            <input type="number"
                   step="0.1"
                   name="Weight"
                   min="10" max="300"
                   value="{{ old('Weight') }}"
                   class="w-full border border-gray-300 rounded-xl px-4 py-2 text-lg 
                          focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
                   placeholder="Masukkan berat badan Anda (dalam kg)"
                   required>
        </div>

        {{-- Hidden: tetap kirim BMI ke backend --}}
        <input type="hidden"
               name="BMI"
               id="input-bmi"
               value="{{ old('BMI') }}">
    </div>
</section>
