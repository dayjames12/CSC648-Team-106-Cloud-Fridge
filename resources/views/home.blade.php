@extends('layouts.app')

@section('content')

{{-- <navbar-component></navbar-component>--}}
{{-- enables usage of bulma icons --}}
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<section class="section">
    <div class="container">

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

        {{-- Attempt Upload Receipt Box 1 --}}
        <div class="block">
            <div class="field has-addons">
                <p class="control">
                    <input type="text" class="input" placeholder="Upload Receipt...">
                </p>
                <p class="control">
                    <a href="" class="button is-info">Upload</a>
                </p>
            </div>
        </div>

        {{-- Add item --}}
        <div class="block">
            <div class="field has-addons">
                <p class="control">
                    <a href="/items/create" class="button is-info">Add Item</a>
                </p>
            </div>
        </div>

        {{-- Sort by --}}
        <div class ="container is-fluid">
            <div class="notification">
                <h1 class="title">Inventory</h1>
                <div class="field">
                    <label class="label">Sort By</label>
                    <form method="POST" action="/items/sort">
                        @csrf
                        <p class="control">
                            <span class="select">
                                <select name="sort-by">
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
                                            <span class="icon align-right">
                                                <i class="fas fa-ellipsis-v fa-2x"></i>
                                            </span>
                                            <ul>
                                            {{-- Retrieve item id to delete when button is pressed --}}
                                            <form method="POST" action="/items/{{ $item->id }}">
                                                {{ method_field('DELETE')}}
                                                <li> 
                                                    <span class="icon">
                                                        <i class="fas fa-plus-circle fa-2x"></i>
                                                    </span>
                                                </li>
                                                <li> 
                                                    <span class="icon">
                                                        <i class="fas fa-cart-plus fa-2x"></i>
                                                    </span>
                                                </li>
                                              
                                                <li>
                                                    <span class="icon">
                                                        <i class="fas fa-info-circle fa-2x"></i>
                                                    </span>
                                                </li>

                                                @csrf
                                                <button class="delete is-medium" style="float: right;"></button>
                                                
                                            </form>
                                               
                                            </ul>
                                        
                                        </li>
                                      
                                 </ul>
                                

                                <p class="title"> {{ $item->name }} </p>
                                <p class="subtitle"> Expires on {{ $item->expiration }}</p>
                                <div class="content">
                                    Quantity: {{ $item->quantity }}
                                </div>
                              
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
                <a class="navbar-item is-expanded is-block has-text-centered">
                    <i class="fa fa-list"></i>
                    <p class="is-size-7">Grocery List</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered">
                    <i class="fa fa-book"></i>
                    <p class="is-size-7">Recipe</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered">
                    <i class="fa fa-cookie-bite"></i>
                    <p class="is-size-7">Food List</p>
                </a>
            </div>
        </nav>
    </div>
</section>
@endsection

