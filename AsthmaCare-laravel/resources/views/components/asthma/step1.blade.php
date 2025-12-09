<section data-step="1">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Berapa usia Anda saat ini?
    </h2>

    <div class="space-y-4 text-lg">
        <input type="number" 
               name="Age" 
               min="1" max="120"
               value="{{ old('Age') }}"
               class="w-full border border-gray-300 rounded-xl px-4 py-2 text-lg focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
               placeholder="Masukkan usia Anda (dalam tahun)"
               required>
    </div>
</section>
