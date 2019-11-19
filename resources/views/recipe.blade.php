@extends('layouts.app')

@section('content')

{{-- <navbar-component></navbar-component>--}}
{{-- enables usage of bulma icons --}}
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<section class="section">
    <div class="container">

    <h1>Recipe add Here!!</h1>

    {{--Edit recipe Here --}}
      
    {{-- Bottom nav bar attempt 1 --}}
        <nav class="navbar is-link is-fixed-bottom" role="navigation">
            <div class="navbar-brand">
                <a class="navbar-item is-expanded is-block has-text-centered" href ="/home">
                    <span class="icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <p class="is-size-7">Inventory</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered" href="/groceryList">
                    <i class="fa fa-list"></i>
                    <p class="is-size-7">Grocery List</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered" href="/recipe">
                    <i class="fa fa-book"></i>
                    <p class="is-size-7">Recipe</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered" href="/foodList">
                    <i class="fa fa-cookie-bite"></i>
                    <p class="is-size-7">Food List</p>
                </a>
            </div>
        </nav>
    </div>
</section>
@endsection
