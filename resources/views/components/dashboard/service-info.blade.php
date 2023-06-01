@props([
    'title' => null,
    'desc' => null,
    'color',
    'icon',
])

<div class="flex items-start gap-4">
    <span class="shrink-0 text-white material-symbols-outlined rounded-lg bg-{{ $color }}-600 p-4">
        {{ $icon }}
    </span>

    <div>
        @if($title)
            <h2 class="text-lg font-bold">{{ $title }}</h2>
        @endif

        @if($desc)
            <p class="mt-1 text-sm text-gray-500">
                {{ $desc }}
            </p>
        @endif
    </div>

</div>
