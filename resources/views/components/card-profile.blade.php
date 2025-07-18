<div class="flex flex-col gap-2 items-center text-center sm:text-start sm:items-start">
    <div class="w-24 h-24 rounded-[50%] bg-cover bg-center" style="background-image: url('{{ asset($imgPath) }}')"></div>
    <div>
        <h2 class="text-lg font-bold md:text-xl">{{ $name }}</h2>
        <p class="text-neutral-600">{{ $position }}</p>
    </div>

    @if ($description)
        <p class="text-neutral-600">{{ $description }}</p>
    @endif

    <div class="flex gap-x-2">
        @if ($linkedInUrl)
            <a href="{{ $linkedInUrl }}">
                <x-fab-linkedin class="w-5 h-5" />
            </a>
        @endif
        @if ($xUrl)
            <a href="{{ $xUrl }}">
                <x-fab-square-x-twitter class="w-5 h-5" />
            </a>
        @endif
    </div>
</div>
