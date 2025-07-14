@php
    $textClass = match ($align) {
        'start' => 'items-baseline',
        'center' => 'items-center',
        'end' => 'items-end',
        default => 'items-center',
    };
@endphp

<div class="flex flex-col gap-2 lg:gap-4 {{ $textClass }}">
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
        <a href="{{ $url }}" class="flex text-sm font-semibold hover:underline">
            @if ($urlText)
                {{ $urlText }}
            @else
                {{ $url }}
            @endif
            <x-heroicon-o-chevron-right class="w-4" />
        </a>
    @endif
</div>
