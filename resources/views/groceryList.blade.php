@extends('layouts.app')

@section('content')

{{-- <navbar-component></navbar-component>--}}
{{-- enables usage of bulma icons --}}
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<section class="section">
    <div class="container">

    <?/* Need to improve this!!*/ ?>
    <h1><strong>Add Grocery List</strong></h1>

    {{-- Search box --}}
        <div class="block">
            <div class="field has-addons">

            <form method="GET" action="/items/search">
                @csrf
                <div class="container">
                    <div class="field has-addons">
                        <div class="control">
                            <input type="text" class="input" name="search" placeholder="Search Fridge...">
                        </div>
                        <div class="control">
                            <button class="button is-info">Search</a>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>

    {{-- Add item --}}
    <div class="block">
        <div class="field has-addons">
            <p class="control">
                <a href="/items/create?origin=/groceryList" class="button is-info">Add Item</a>
            </p>
        </div>
    </div>
    
    {{-- Sort by --}}
        <div class ="block">
            <div class="notification" style="background-color: rgb(120, 239, 255); border-radius: 15px;">
                <h1 class="title" style="color:black;">All grocery items</h1>

                <!-- background color = rgb(134, 241, 255) -->
                {{-- Fridge inventory --}}
                <div class="tile is-ancestor"> {{-- wraps up the tiles in a grid of tiles --}}
                    <div class="tile is-vertical is-5">
                        <div class="tile is-parent is-vertical">
                                
                            @foreach ($items as $item)                                
                                {{-- tile is red if less than 3 days, yellow if less than 7 && >3, teal otherwise  --}}
                                @php
                                    $expdate =  (Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse($item->expiration)->format('Y-m-d')))
                                @endphp

                                @if ($expdate < 3)
                                    <article class="title is-child notification is-danger" style="border-radius:15px; color:black;">
                                @elseif ($expdate >= 3 && $expdate < 7)
                                    <article class="title is-child notification is-warning" style="border-radius:15px; color:black;">
                                @else
                                    <article class="title is-child notification is-primary" style="border-radius:15px; color:black;">
                                @endif
                                
                                {{-- Option menu for each individual item --}}
                                <ul class="options" style ="float: right;">
                                    <li>
                                        <span class="icon align-right">
                                            <i class="fas fa-ellipsis-v fa-2x"></i>
                                        </span>
                                        <ul>
                                            {{-- Retrieve item id to delete when button is pressed --}}
                                            <form method="POST" action="/items/{{ $item->id }}">
                                                {{ method_field('DELETE')}}
                                                <button class="button">
                                                    <span class="icon">
                                                        <i class="fas fa-plus-circle fa-2x"></i>
                                                    </span>
                                                </button> 

                                                <button class="button">
                                                    <span class="icon">
                                                        <i class="fas fa-cart-plus fa-2x"></i>
                                                    </span>
                                                </button> 

                                                <button class="button">
                                                    <span class="icon">
                                                        <i class="fas fa-info-circle fa-2x"></i>
                                                    </span>
                                                </button> 

                                                @csrf
                                                <button class="button">
                                                    <span class="icon">
                                                        <i class="fas fa-trash-alt fa-2x"></i>
                                                    </span>
                                                </button>
                                            </form>
                                        </ul>                                     
                                    </li>                                
                                </ul>
                                               
                                <p class="title is-4"> {{ $item->name }} </p>
                                <p class="subtitle is-5"> Quantity: {{ $item->quantity }} </p>
                                <p class="subtitle is-5"> Expires: {{ $item->expiration }} </p>  
                                                        
                            </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>




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
                <a class="navbar-item is-expanded is-block has-text-centered" href="/foodList">
                    <i class="fa fa-cookie-bite"></i>
                    <p class="is-size-7">Food List</p>
                </a>
            </div>
        </nav>

    </div>
</section>
@endsection

