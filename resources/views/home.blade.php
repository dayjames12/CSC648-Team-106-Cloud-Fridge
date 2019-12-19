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

        {{-- Sort by --}}
        <div class="block">
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

                            <button class = "button is-info" type="submit" value="Submit">
                                Sort
                                <!-- <input type="submit" value="Submit"> -->
                            </button>
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
                                $expdate =
                                (Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse($item->expiration)->format('Y-m-d')))
                                @endphp

                                @if ($expdate < 3) 
                                <article class="title is-child notification is-danger"style="border-radius:15px;">
                                @elseif ($expdate > 3 && $expdate < 7) <article
                                    class="title is-child notification is-warning" style="border-radius:15px;">
                                    @else
                                    <article class="title is-child notification is-primary" style="border-radius:15px;">
                                        @endif

                                        {{-- Option menu for each individual item --}}
                                        <ul class="options" style="float: right;">
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
                                        <p class="subtitle is-5"> Price: ${{ $item->price }} </p>
                                        <p class="subtitle is-5"> Expires: {{ $item->expiration_date }} </p>
                                    </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="modal-grocery" class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                <p class="modal-card-title">Grocery</p>
                <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <aside>

                        @foreach ($groceryItems as $item)
                            <label>
                            <input type=checkbox>
                            <span>{{ $item->name }}</span>
                            </label>
                        @endforeach

                    </aside>
                </section>
                <footer class="modal-card-foot">
                    <button id="addGroceryItem" class="button is-info">(+) Add Items</button>
                    <button class="button is-danger">Clear All</button>
                </footer>

               {{-- Add item popup --}}
                <div id="modal-addGroceryItem" class="modal">
                    <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title">Add an item</p>
                                <button class="delete" aria-label="close"></button>
                            </header>
                            <section class="modal-card-body">
                                <div class="container">

                                    <div class="block">
                                        <div class="notification">



                                            <div class="container">

                                                <form method="POST" action="/home">
                                                @csrf
                                                    <div class="field">
                                                        <label class="label">Item Name</label>
                                                            <div class="control has-icons-left has-icons-right">
                                                                <input class="input" type="text" placeholder="Text" name="name" required autocomplete="Name">
                                                                <span class="icon is-small is-left">
                                                                    <i class="fas fa-utensils"></i>
                                                                </span>
                                                            </div>
                            
                                                    </div>
                        
                                                    <div class="field">
                                                        <label class="label">Item Amount</label>
                                                        <div class="control has-icons-left has-icons-right">
                                                            <input class="input" type="integer" placeholder="Amount" name="quantity" required autocomplete="Amount">
                                                            <span class="icon is-small is-left">
                                                                <i class="fas fa-hashtag"></i>
                                                            </span>
                            
                                                        </div>
                            
                                                    </div>
                        
                                                    <div class="field">
                                                        <label class="label">Price</label>
                                                        <div class="control has-icons-left has-icons-right">
                                                            <input class="input" type="integer" placeholder="Price" name="price" required autocomplete="Price">
                                                            <span class="icon is-small is-left">
                                                                <i class="fas fa-dollar-sign"></i>
                                                            </span>
                            
                                                        </div>
                            
                                                    </div>

                                                    <div class="field">
                                                        <label class="label">Expiration Date</label>
                                                        <div class="control has-icons-left has-icons-right" >
                                                            <input class="input" type="date" name="expiration_date" required autocomplete="Date">
                                                            <span class="icon is-small is-left">
                                                                <i class="fas fa-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="field is-grouped">
                                                        <div class="control">
                                                            <button type="submit" class="button is-link">Submit</button>
                                                        </div>
                                                        <div class="control">
                                                            <button id="cancel" type="button" class="button is-link is-light">Cancel</button>
                                                        </div>
                                                    </div>
                        
                                                    <input type="hidden" name="item_list" value="Grocery list">    {{-- List which item belongs to --}}


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
            </div>
        </div>


        {{-- Add item --}}
        <div class="blockContainer">

                <a href="/items/create?origin=/home" id="addFridgeItem" class="button is-info">(+) Add Items</a>

        </div>

        {{-- Add item popup --}}
        <div id="modal-addFridgeItem" class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Add an item</p>
                    <button class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <div class="container">

                        <div class="block">
                            <div class="notification">



                                <div class="container">

                                    <form method="POST" action="/home">
                                    @csrf
                                        <div class="field">
                                            <label class="label">Item Name</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input" type="text" placeholder="Text" name="name" required autocomplete="Name">
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-utensils"></i>
                                                </span>
                                            </div>
                            
                                        </div>
                        
                                        <div class="field">
                                            <label class="label">Item Amount</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input" type="integer" placeholder="Amount" name="quantity" required autocomplete="Amount">
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-hashtag"></i>
                                                </span>
                            
                                            </div>
                            
                                        </div>
                        
                                        <div class="field">
                                            <label class="label">Price</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="input" type="integer" placeholder="Price" name="price" required autocomplete="Price">
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-dollar-sign"></i>
                                                </span>
                            
                                            </div>
                            
                                        </div>

                                        <div class="field">
                                            <label class="label">Expiration Date</label>
                                            <div class="control has-icons-left has-icons-right" >
                                                <input class="input" type="date" name="expiration_date" required autocomplete="Date">
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="field is-grouped">
                                            <div class="control">
                                                <button type="submit" class="button is-link">Submit</button>
                                            </div>
                                            <div class="control">
                                                <button id="cancel" type="button" class="button is-link is-light">Cancel</button>
                                            </div>
                                        </div>
                        
                                        <input type="hidden" name="item_list" value="Fridge">    {{-- List which item belongs to --}}


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        {{-- Bottom nav bar attempt 1 --}}
        <nav class="navbar is-link is-fixed-bottom" role="navigation">
            <div class="navbar-brand">
                <a class="navbar-item is-expanded is-block has-text-centered" href="/home">
                    <span class="icon">
                        <i class="fas fa-home"></i>
                    </span>
                    <p class="is-size-7">Inventory</p>
                </a>
                <a  id="grocery" class="navbar-item is-expanded is-block has-text-centered" href="">
                    <i class="fa fa-list"></i>
                    <p class="is-size-7">Grocery List</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered" href="/foodList">
                    <i class="fa fa-cookie-bite"></i>
                    <p class="is-size-7">Food List</p>
                </a>
                <a class="navbar-item is-expanded is-block has-text-centered" href="/receiptUpload">
                    <i class="fas fa-receipt"></i>
                    <p class="is-size-7">Receipt Upload</p>
                </a>
            </div>
        </nav>
    </div>
</section>



@endsection