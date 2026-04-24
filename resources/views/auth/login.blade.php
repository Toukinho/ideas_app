<x-layout title="Login">
    <form action="/login" method="POST">
        <x-form title="Login">
            @csrf
            <x-form.field required label="Email" name="email" type="email" />
            <x-form.field required label="Password" name="password" type="password" />
            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <x-form.button type="submit">Login</x-form.button>
        </x-form>
    </form>
</x-layout>
