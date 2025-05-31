@props(['link'])

<a href="{{ $link }}" class="text-lg underline italic hover:text-cyan-500 transition-colors duration-200">
    {{$slot}} ->
</a>
