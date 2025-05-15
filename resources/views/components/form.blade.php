<form {{ $attributes->merge(['method' => 'POST', 'action' => route('register')]) }}>
    @csrf
    <div class="flex flex-col gap-2 w-[70%] mx-auto px-[1rem] py-[1rem] rounded-md border-cyan-teal border-1">
        {{ $slot }}
    </div>
</form>
