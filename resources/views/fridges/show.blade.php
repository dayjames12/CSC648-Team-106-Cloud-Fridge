@extends('layouts.app')

@section('title','Fridge Edit')

@section('content')
    <h1 class="name">{{ $fridge->name }}</h1>

    <div class="content">
        {{ $fridge->owner}}
    </div>

    <p>
        <a href="/fridges/{{$fridge->id}}/edit">Edit</a>
    </p>




            <!-- Grocery Modal -->
    <div id="modal-grocery" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Grocery</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <aside>
                

                    <label>
                        <input type=checkbox>
                        <span>Salad greens</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Button Mushrooms</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Cherry Tomatoes</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Onion</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Peppers</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Cucumber</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Naan Bread</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Feta Cheese</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Food Colouring</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Wooden toothpicks</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Wooden Skewers</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Pickles</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Pickled Veggies</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Olives</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Croutons</span>
                    </label>

                    <label>
                        <input type=checkbox>
                        <span>Nice Soup</span>
                    </label>
                </aside>
            </section>
            
            <footer class="modal-card-foot">
            <a href="/items/create?origin=/groceryList" class="button is-info">Add Item</a>
                <button class="button is-danger">Clear All</button>
            </footer>
        </div>
    </div>
    
    {{-- Bottom nav bar --}}
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
            <a class="navbar-item is-expanded is-block has-text-centered" href="">
                <i class="fas fa-receipt"></i>
                <p class="is-size-7">Receipt Upload</p>
            </a>
        </div>
    </nav>
@endsection
