@props(['title' => 'Ideas app'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-foreground">
    <x-layout.nav />

    <main class="max-w-7x1 mx-auto px-6">
        {{ $slot }}
    </main>

    @session('success')
        <div class="bg-secondary font- px-4 py-3 absolute bottom-4 right-4 rounded-lg">{{ $value }}</div>
    @endsession

</body>

</html>
