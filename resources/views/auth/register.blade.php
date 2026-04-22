<x-layout title="Register">
    <x-form title="Register">
        <form action="/register" method="POST">
            @csrf
            <x-form.field required label="Name" name="name" type="text" />
            @error('name')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <x-form.field required label="Email" name="email" type="email" />
            @error('email')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <x-form.field required label="Password" name="password" type="password" />
            @error('password')
                <p class="text-error text-sm">{{ $message }}</p>
            @enderror
            <button class="btn btn-neutral mt-4">Register</button>
        </form>
    </x-form>
</x-layout>
