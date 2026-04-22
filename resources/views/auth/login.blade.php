<x-layout title="Login">
    <form action="/login" method="POST">
        <x-form title="Login">
            @csrf
            <x-form.field required label="Email" name="email" type="email" />
            <x-form.field required label="Password" name="password" type="password" />
            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-neutral mt-4">Login</button>
        </x-form>
    </form>
</x-layout>
