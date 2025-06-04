@props(['size' => 'medium'])

@php
    $class = "rounded-sm leading-none bg-cyan-teal text-white";
    if ($size === 'small') {
        $class .= " text-xs py-[0.25rem] px-[0.5rem]";
    } else {
        $class .= " text-sm py-[0.25rem] px-[1rem]";
    }
@endphp

<a href="#" class="{{ $class }}">{{ $slot }}</a>
