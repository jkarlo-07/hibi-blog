@props(['type' => 'text', 'field', 'label'])

<div class="flex flex-col">
    <label for="{{ $field }}" class="mb-1 font-semibold">{{ $label }}</label>
    <input
        id="{{ $field }}"
        name="{{ $field }}"
        type="{{ $type }}"
        value="{{ old($field) }}"
        required
        autofocus="{{ $field === 'name' ? 'autofocus' : '' }}"
        autocomplete="{{ $field }}"
        class="border px-2 py-1 text-sm rounded-sm outline-none placeholder-[#CAC4D0] border-[#CAC4D0] focus:border-2 focus:border-cyan-500 active:border-2 active:border-cyan-500"
    />
    @error($field)
        <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
