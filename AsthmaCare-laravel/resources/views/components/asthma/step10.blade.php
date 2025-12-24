<section data-step="10" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Apakah Anda memiliki riwayat penyakit lain yang sedang atau pernah diderita selain asma?
    </h2>

    <div class="space-y-2 text-lg">
        <label for="Comorbidities" class="block text-gray-700">
            Silakan sebutkan penyakit lain (jika ada)
        </label>

        <input
            type="text"
            name="Comorbidities"
            id="Comorbidities"
            value="{{ old('Comorbidities') }}"
            placeholder="Contoh: Diabetes, hipertensi, alergi, atau isi 'Tidak ada'"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                   focus:outline-none focus:ring-2 focus:ring-cyan-300
                   focus:border-cyan-300"
            required
        >
    </div>
</section>
