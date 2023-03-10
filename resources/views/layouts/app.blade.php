<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="global-navigation">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">link 1</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">link 2</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">link 3</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">link 4</a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
</body>
</html>
