@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Board Exam' }}</title>
    @vite(['resources/css/app.css', 'resources/ks/app.js'])
</head>
<body class="h-screen flex flex-col justify-center items-center bg-gray-400">
    {{ $slot }}
</body>
</html>