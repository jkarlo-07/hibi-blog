@props(['active' => false])

@php
    $baseClasses = 'transition-colors duration-200';
    $stateClass = $active ? 'text-cyan-teal' : 'hover:text-cyan-teal';
    $classes = "$baseClasses $stateClass";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
