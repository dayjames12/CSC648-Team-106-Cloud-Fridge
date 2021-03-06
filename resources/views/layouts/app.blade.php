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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body class="has-navbar-fixed-top">
    <div id="app">
        <nav class="navbar is-info is-fixed-top is-bold">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="/">
                        <img src="/svg/fridge.svg" width="32" height="32">
                        Cloud Fridge
                    </a>
                    <a role="button" class="navbar-burger burger"><span></span><span></span><span></span></a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        @auth
                        <a class="navbar-item" href="/home">Home</a>
                        <a class="navbar-item" href="/fridges">Fridges</a>
                        @endauth
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <div class="buttons">
                                @guest
                                <a class="button is-white is-outlined" href="/register"><strong>Sign up</strong></a>
                                <a class="button is-white is-outlined" href="/login"><strong>Login</strong></a>
                                @else
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="button is-white is-outlined" type="submit">Logout</button>
                                </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        {{-- <div class="container">
            <article class="message is-info">
                <div class="message-header has-text-centered">
                    <p>SFSU Software Engineering Project CSC 648-848, Fall 2019. For Demonstration Only.</p>
                </div>
            </article>
        </div> --}}


       
    </div>
</body>

<script>
    $(document).ready(function() {

        $(".navbar-burger").click(function() {
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");
        });


        $("#cancel").click(function(){

            location.href = "/home"

        });


        // Brings up the grocery List page
    
        $("#grocery").click(function() {
            $("#modal-grocery").toggleClass("is-active");
            event.preventDefault();

            var modal = document.querySelector('#modal-grocery');  
            modal.querySelector('.modal-background').addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-active');
                html.classList.remove('is-clipped');
            });
            modal.querySelector('.delete').addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-active');
                html.classList.remove('is-clipped');

            }
            
            )
        });

        // Modal for adding items to fridge
        $("#addFridgeItem").click(function() {
            $("#modal-addFridgeItem").toggleClass("is-active");
            event.preventDefault();

            var modal = document.querySelector('#modal-addFridgeItem');  
            modal.querySelector('.modal-background').addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-active');
                html.classList.remove('is-clipped');
            });
            modal.querySelector('.delete').addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-active');
                html.classList.remove('is-clipped');
            }
            
            )
        });

        // Modal for adding items to grocery list
        $("#addGroceryItem").click(function() {
            $("#modal-addGroceryItem").toggleClass("is-active");
            event.preventDefault();

            var modal = document.querySelector('#modal-addGroceryItem');  
            modal.querySelector('.modal-background').addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-active');
                html.classList.remove('is-clipped');
            });
            modal.querySelector('.delete').addEventListener('click', function(e) {
                e.preventDefault();
                modal.classList.remove('is-active');
                html.classList.remove('is-clipped');
            }
            
            )
        });
    });
</script>

</html>