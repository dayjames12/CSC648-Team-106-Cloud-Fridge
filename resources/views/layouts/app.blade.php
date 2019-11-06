<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class= "container">
        <p class="has-text-centered">SFSU Software Engineering Project CSC 648-848, Fall 2019.</p>
        <p class="has-text-centered">For Demonstration Only.</p>
    </div>
    <title>Cloud Fridge</title>
    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
    .center {

        display: flex;
        justify-content: center;
        align-items: center;
    }

    </style>
        
</head>
<body class= "has-navbar-fixed-top">
    <div id="app">
        {{-- Moved navbar component out of the hero section because it was breaking the fixed nav bar --}}
        <navbar-component></navbar-component>
        <div class="hero is-link">
           
        </div>
        @yield('content')
    </div>
</body>
</html>
