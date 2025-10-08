<div class="flex justify-between items-center gap-4">
    <div class="bg-[#F6FFFC] rounded-lg p-3 w-3/4">
        <h3 class="flex items-center font-semibold text-gray-800 mb-2"><img src="/images/orglingkar.png" alt="Keshatan" class="h-7 w-7 sm:h-8 sm:w-8 object-contain"> {{ $title }}</h3>
        <ul class="pl-5 text-lg text-gray-700 space-y-1">
        @foreach($list as $item)
            <li class="flex items-center gap-2">
                <img src="/images/centang.png" alt="Centang" class="h-4 w-4 object-contain">
                <span>{{ $item }}</span>
            </li>
        @endforeach
        </ul>
    </div>

    <div class="w-24 sm:w-30 md:w-36 lg:w-42 flex-shrink-0 flex justify-center mx-8">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-auto rounded-lg">
    </div>
</div>
