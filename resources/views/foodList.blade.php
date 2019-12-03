@extends('layouts.app')

@section('content')

{{-- <navbar-component></navbar-component>--}}
{{-- enables usage of bulma icons --}}
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<section class="section">
    
    
    <div class="block"> 
        <div class="container">
        <nav class="level">
            <div class="level-item has-text-centered">
                <div class="action-buttons">
                    <a class= "button is-link">
                        <i class="fa fa-chevron-left">
                        </i>
                    </a>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <h2 class="title">Thursday</h2>
                    <p class="h1">Oct 22</p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div class="action-buttons">
                    <a class= "button is-link">
                        <i class="fa fa-chevron-right">
                        </i>
                    </a>
                </div>
            </div>
           
        </nav>

        </div>

        <div class="container has-text-centered">
            <div class="notification" style="border-radius: 25px;">
                <!-- <div class ="tile is-ancestor">
                    <div class="tile is-parent">
                        <div class= "tile is-child box">
                            <p>Tile 1</p>
                        </div>

                        
                        
                    </div>
                    <div class="tile is-parent">
                        <div class= "tile is-child box">
                            <div class="">
                                <p>Tile 2</p>
                            </div>
                        </div>
                    </div>

                
                </div> -->
                <div class="columns is-centered is-vcentered">
                    <div class="column is-half">
                        <div>
                            <h1 class="title is-2"> Testing something</h1>
                        </div>
                    </div>
                    <div class="column is-half is-narrow">
                        <div class="placeHolder" >
                            <figure class="image is-128x128">
                                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                            </figure>
                        </div>
                    </div>




                </div>


            </div>
        </div>




    </div>

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
    
{{--Most of This page code div block came from home.blade.php but feel like there should be changes to it, feel free to change if nescessary--}}
    {{-- Sort by --}}
        <div class ="block">
            <div class="notification">
                <h1 class="title">Inventory</h1>
                <div class="field">
                    <label class="label">Sort By</label>
                    <form method="POST" action="/items/sort">
                        @csrf
                        <p class="control">
                            <span class="select">
                                <select name="sort_by">
                                    <option value="1">Item Name</option>
                                    <option value="2">Expiration Date</option>
                                    <option value="3">Quantity</option>
                                </select>
                            </span>
                            <input type="submit" value="Submit">
                        </p>
                    </form>
                </div>
                   
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
                                    <article class="title is-child notification is-danger">
                                @elseif ($expdate > 3 && $expdate < 7)
                                    <article class="title is-child notification is-warning">
                                @else
                                    <article class="title is-child notification is-primary">
                                @endif
                                
                                {{-- Option menu for each individual item --}}
                                <ul class="options" style ="float: right;">
                                    <li>
                                        <span class="icon align-right is-overlay">
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

