@props(['label', 'name', 'type' => 'text'])

<div class="space-y-2">
    <label for="{{ $name }}" class="label text-base font-medium">
        {{ $label }}
    </label>
    <input type="{{ $type }}"
        class="input input-lg w-full {{ $errors->has($name) ? 'input-error' : 'input-bordered' }}"
        id="{{ $name }}" name="{{ $name }}" value="{{ old($name) }}" {{ $attributes }} />
</div>
