<x-layout title="Register">
    <form action="/register" method="POST">
        <x-form title="Register">
            @csrf
            <x-form.field required label="Name" name="name" type="text" />
            <x-form.field required label="Email" name="email" type="email" />
            <x-form.field required label="Password" name="password" type="password" />
            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-neutral mt-4">Register</button>
        </x-form>
    </form>
</x-layout>
