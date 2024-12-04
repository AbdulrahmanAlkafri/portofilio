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
    <div id="toast"
        class="fixed top-5 right-5 bg-green-500 text-white p-3 rounded hidden transition-opacity duration-300">
        <span id="toast-message"></span>
    </div>
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