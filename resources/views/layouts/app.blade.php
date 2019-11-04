<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <p class="has-text-centered">SFSU Software Engineering Project CSC 648-848, Fall 2019.</p>
    <p class="has-text-centered">For Demonstration Only.</p>

    <title>Cloud Fridge</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="hero is-primary"><navbar-component></navbar-component></div>
        @yield('content')
    </div>
</body>
</html>
