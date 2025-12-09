<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-900 text-white">
   <x-partials.header></x-partials.header>
    <!-- @include('_partials._header') -->

    <main class="container mx-auto p-5 mt-24">
        {{ $slot }}
    </main>
</body>

</html>