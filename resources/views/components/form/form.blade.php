@props(['title'])
<fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
    <legend class="fieldset-legend">{{ $title }}</legend>

    {{ $slot }}

    <button class="btn btn-neutral mt-4">Login</button>
</fieldset>
