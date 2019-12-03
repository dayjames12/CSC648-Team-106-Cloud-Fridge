<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body class="has-navbar-fixed-top">
    <div id="app">
        <navbar-component></navbar-component>
    
        @yield('content')
        <div class="container">
            <article class="message is-info">
                <div class="message-header has-text-centered">
                    <p>SFSU Software Engineering Project CSC 648-848, Fall 2019. For Demonstration Only.</p>
                </div>
            </article>
        </div>
    </div>
</body>
</html>
