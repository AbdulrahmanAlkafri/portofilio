<!DOCTYPE html>
<html lang="en" dir="rtl" class="bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')

</head>

<body class="h-screen bg-gray-50 w-full">
    <header>
        @include('components.navbar')
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

    @vite('resources/js/app.js')
</body>

</html>