@props([
    'search' => '',
    'sort' => null,
])

<div class="mt-6 flex flex-col md:flex-row justify-between items-center gap-4">

    <!-- Search Field -->
    <div class="relative w-full md:flex-1">
        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Cari artikel berdasarkan judul..."
            class="bg-gray-100 rounded-full px-4 py-3 pr-10 text-base text-gray-700 w-full
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400
                   transition-all duration-300"
        />
        <button type="submit"
            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 text-lg">
            🔍
        </button>
    </div>

    <!-- Dropdown (Sort) -->
    <div class="relative w-full md:w-44" id="dropdownSort">

        <!-- Trigger -->
        <button id="dropdownSortBtn"
            type="button"
            class="bg-gray-100 rounded-full px-5 py-3 text-base text-gray-700 w-full flex items-center justify-between border border-transparent transition-all duration-300">
            <span id="dropdownSortLabel">
                {{ $sort === 'terlama' ? 'Terlama' : 'Terbaru' }}
            </span>
            <span id="dropdownSortArrow" class="transition-transform duration-300">▼</span>
        </button>

        <!-- Menu -->
        <div id="dropdownSortMenu"
            class="absolute left-0 mt-2 w-full bg-white rounded-xl shadow-lg border border-cyan-300
                   opacity-0 invisible translate-y-2 transition-all duration-300 z-20">
            
            <button 
                type="button"
                    data-value="terbaru"
                class="dropdownSortItem w-full text-left px-4 py-2 hover:bg-cyan-50">
                Terbaru
            </button>

            <button 
                type="button"
                    data-value="terlama"
                class="dropdownSortItem w-full text-left px-4 py-2 hover:bg-cyan-50">
                Terlama
            </button>

        </div>
    </div>
</div>
