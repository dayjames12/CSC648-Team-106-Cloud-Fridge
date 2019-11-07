<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Cloud Fridge</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class= "has-navbar-fixed-top">
    <div id="app">
        <div class="notice container has-text-centered">
            <p>SFSU Software Engineering Project CSC 648-848, Fall 2019.</p>
            <p>For Demonstration Only.</p>
        </div>
        <navbar-component></navbar-component>
        @yield('content')
    </div>
</body>
</html>
