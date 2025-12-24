<section data-step="6" class="hidden">
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
        Apakah Anda memiliki riwayat alergi tertentu? Jika ada, silakan jelaskan jenis alergi yang Anda ketahui.
    </h2>

    <div class="space-y-4">
        <textarea
            name="Allergies"
            rows="4"
            placeholder="Contoh: alergi debu, serbuk sari, bulu hewan, makanan tertentu, obat-obatan, atau tuliskan 'tidak ada' jika tidak memiliki alergi"
            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm
                   focus:outline-none focus:ring-2 focus:ring-cyan-300
                   resize-none"
            required
        >{{ old('Allergies') }}</textarea>
    </div>
</section>
