@props([
    'action',
    'search' => '',
])
<div class="flex justify-center mb-12">
    <form 
        action="{{ $action }}" 
        method="GET" 
        class="w-full md:w-2/3 lg:w-1/2 flex items-center border-2 border-gray-300 rounded-full bg-white px-5 py-3 shadow-md"
    >
        <input 
            type="text" 
            name="search" 
            value="{{ $search }}" 
            placeholder="Cari dokter atau nama rumah sakit" 
            class="flex-1 outline-none text-gray-700 text-lg">
        <button type="submit">
            <i class="fas fa-search text-gray-500 text-xl"></i>
        </button>
    </form>
</div>
