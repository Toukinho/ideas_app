<x-layout title="Register">
    <x-form title="Register">
        <form action="/Register" method="POST">
            @csrf
            <x-form.field required label="Name" name="name" type="text" />
            <x-form.field required label="Email" name="email" type="email" />
            <x-form.field required label="Password" name="password" type="password" />
        </form>
    </x-form>
</x-layout>
