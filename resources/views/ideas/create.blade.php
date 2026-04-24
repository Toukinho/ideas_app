<x-layout title="Create an idea.">
    <h1 class="font-bold text-4xl px-2 py-4">What do you wanna make?</h1>

    <form action="/ideas" method="POST">
        @csrf
        <x-form title="Create an idea.">
            <x-form.field required label="Title" name="title" type="text" />
            <x-form.textarea required label="Description" name="description" rows="6" />
            <x-form.button type="submit">Create Idea</x-form.button>
        </x-form>
    </form>
</x-layout>
