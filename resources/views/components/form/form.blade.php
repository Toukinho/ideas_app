@props(['title'])

<fieldset
    {{ $attributes->merge(['class' => 'fieldset bg-base-200 border-base-300 rounded-box w-full max-w-xl border p-6 mx-auto']) }}>
    <legend class="fieldset-legend text-lg">{{ $title }}</legend>

    <div class="space-y-4">
        {{ $slot }}
    </div>
</fieldset>
