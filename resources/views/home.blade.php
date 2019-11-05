@extends('layouts.app')

@section('content')

{{-- <navbar-component></navbar-component>--}}
{{-- enables usage of bulma icons --}}
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<section class="section">
    <div class="container">

        {{-- Attempt Search Box 1 --}}
        <div class="block">
            <div class="field has-addons">
                <p class="control">
                    <input type="text" class="input" placeholder="Search Food List...">
                </p>
                <p class="control">
                    <a href="" class="button is-info">Search</a>
                </p>
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

        {{-- Attempt Add Item Box 1 --}}
        <div class="block">
            <div class="field has-addons">
                <p class="control">
                    <a href="/items/create" class="button is-info">Add Item</a>
                </p>
            </div>
        </div>

        {{-- Attempt Inventory + Sort By style 1 --}}
        {{-- 
        <div class="block">
            <div class="box">
                <p class ="content is-medium">Inventory <button class="button is-light">Sort By</button></p>
            </div>
        </div>
        --}}

        {{-- Attempt Inventory + Sort By style 2 --}}
        <div class ="block">
            <div class="notification">
                <h1 class="title">Inventory</h1>
                <form>
                    <div class="field">
                        <label class="label">Sort By</label>
                        <p class="control">
                            <span class="select">
                                <select>
                                    <option>Item Name</option>
                                    <option>Expiration Date</option>
                                    <option>Price</option>
                                </select>
                            </span>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        
        {{-- Attempt at food list --}}
        <div class="block">
            <div class="notification">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        Title
                        </p>
                    </div>

                    @foreach ($items as $item)
                    <footer class="card-footer">
                        <p class="card-footer-item">
                            {{ $item->name }}
                        </p>
                    </footer>
                    @endforeach
               </div>
           </div>
        </div>
                   
        {{-- Attempt at food list 2 --}}
        <div class="tile is-ancestor"> {{-- wraps up the tiles in a grid of tiles --}}
            <div class="tile is-vertical is-5">
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification is-primary">
                        <button class="delete"></button>
                        <p class="title">Apple</p>
                        <p class="subtitle">Expires Never</p>
                        <div class="content">
                            Quantity: 1
                        </div>
                    </article>
                    <article class="tile is-child notification is-warning">
                        <button class="delete"></button>
                        <p class="title">Banana</p>
                        <p class="subtitle">Expired Yesterday</p>
                        <div class="content">
                            Quantity: 2
                        </div>
                    </article>
                </div>
            </div>
        </div>
        
        {{-- Bottom nav bar attempt 1 --}}
        <nav class="navbar is-link is-fixed-bottom" role="navigation">
            <div class="navbar-brand">
                <a class="navbar-item is-expanded is-block has-text-centered">
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

