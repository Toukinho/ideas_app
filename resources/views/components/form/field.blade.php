@props(['label', 'name'])

<div class="space">
    <label for="{{ $name }}" class="label">{{ $label }}</label>
    <input type="text" class="input" id="{{ $name }}" name="{{ $name }}" value="{{ old($name) }}"
        {{ $attributes }} />
</div
