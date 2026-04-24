<x-layout title="Register">
    <form action="/register" method="POST">
        <x-form.form title="Register">
            @csrf
            <x-form.field required label="Name" name="name" type="text" />
            <x-form.field required label="Email" name="email" type="email" />
            <x-form.field required label="Password" name="password" type="password" />
            <x-form.button type="submit">Register</x-form.button>
            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
        </x-form.form>
    </form>
</x-layout>
