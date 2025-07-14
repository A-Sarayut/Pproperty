<div class="flex flex-col gap-1 items-center">
    @if ($icon)
        <x-dynamic-component :component="$icon" class="w-12" />
    @endif

    @if ($title)
        <h3 class="text-lg sm:text-xl font-semibold">
            {{ $title }}
        </h3>
    @endif

    @if ($description)
        <p class="text-neutral-600">
            {{ $description }}
        </p>
    @endif

    @if ($url)
        <a href="{{ $url }}" class="flex text-sm px-3.5 py-2.5 font-semibold hover:underline">
            @if ($urlText)
                {{ $urlText }}
            @else
                {{ $url }}
            @endif
            <x-heroicon-o-chevron-right class="w-4" />
        </a>
    @endif
</div>
