<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert">
    {{-- Devuelve el primer valor not null --}}
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{ $slot }}
</div>