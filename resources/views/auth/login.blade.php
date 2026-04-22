<x-layout title="Login">
    <form action="/login" method="POST">
        <x-form title="Login">
            @csrf
            <x-form.field required label="Email" name="email" type="email" />
            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <x-form.field required label="Password" name="password" type="password" />
            @error('password')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <button class="btn btn-neutral mt-4">Login</button>
        </x-form>
    </form>
</x-layout>
