<div class="flex flex-col md:flex-row items-center md:items-center gap-6 md:gap-10">
    
    {{-- Bagian teks --}}
    <div class="bg-[#F6FFFC] rounded-lg p-4 md:p-6 w-full md:w-3/4">
        <h3 class="flex items-center font-semibold text-gray-800 mb-3 text-lg md:text-xl">
            <img src="/images/orglingkar.png" alt="Kesehatan" class="h-7 w-7 sm:h-8 sm:w-8 object-contain mr-2">
            {{ $title }}
        </h3>

        <ul class="pl-5 text-base text-gray-700 space-y-2">
            @foreach($list as $item)
                <li class="flex items-start gap-2">
                    <img src="/images/centang.png" alt="Centang" class="h-4 w-4 object-contain mt-1">
                    <span>{{ $item }}</span>
                </li>
            @endforeaczh
        </ul>
    </div>

    {{-- Gambar --}}
    <div class="w-full md:w-1/4 flex justify-center md:justify-end">
        <img src="{{ $image }}" alt="{{ $title }}" 
             class="w-40 sm:w-52 md:w-60 lg:w-72 h-auto rounded-lg object-contain">
    </div>

</div>
