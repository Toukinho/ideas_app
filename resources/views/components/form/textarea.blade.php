@props(['label', 'name', 'rows' => 4])

<div class="space-y-2">
    <label for="{{ $name }}" class="label text-base font-medium">
        {{ $label }}
    </label>
    <textarea
        class="textarea textarea-lg w-full resize-none {{ $errors->has($name) ? 'textarea-error' : 'textarea-bordered' }}"
        id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" {{ $attributes }}>{{ old($name) }}</textarea>
</div>
