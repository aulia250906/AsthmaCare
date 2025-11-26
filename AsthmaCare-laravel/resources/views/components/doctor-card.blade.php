@props(['doctor'])

<div class="bg-white shadow-lg rounded-2xl p-8 flex items-center space-x-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
    <img 
        src="{{ asset('storage/' . $doctor->photo) }}" 
        alt="{{ $doctor->name }}" 
        class="w-28 h-28 rounded-full object-cover border-4 border-blue-100">

    <div>
        <h3 class="text-xl font-semibold text-gray-800">{{ $doctor->name }}</h3>
        <p class="text-gray-600 text-base">{{ $doctor->hospital }}</p>
        <p class="text-gray-500 text-sm mt-1">
            <i class="fas fa-map-marker-alt text-blue-500"></i> {{ $doctor->address }}
        </p>

        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($doctor->address) }}" target="_blank">
            <button class="mt-4 px-5 py-2 border border-gray-400 rounded-lg text-sm hover:bg-blue-100 transition">
                Lihat di Maps
            </button>
        </a>
    </div>
</div>
