
<div class="bg-gray-50 border rounded-lg p-3 flex justify-between items-center">
    <!-- Bagian kiri: title + list -->
    <div class="w-3/4">
        <h3 class="font-semibold text-gray-800 mb-2">{{ $title }}</h3>
        <ul class="list-disc pl-5 text-sm text-gray-700 space-y-1">
            @foreach($list as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Bagian kanan: gambar -->
    <div class="w-20">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-auto">
    </div>
</div>
