<x-layout title="Login">
    <x-form title="Login">
        <form action="/login" method="POST">
            @csrf
            <x-form.field required label="Email" name="email" type="email" />
            <x-form.field required label="Password" name="password" type="password" />
        </form>
    </x-form>
</x-layout>
