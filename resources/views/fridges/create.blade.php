@extends('layouts.app')

@section('title','Fridge Create')

@section('content')

    <section class="section">
        
        <div class="notification is-bold has-text-centered">
              
            <h1 class="title">Create a new fridge</h1>
              
        </div>

        <div id = "fridgeCreate" class="notification">
            
            <div class="hero-body">
                <form method="POST" action="/fridges">
                {{ csrf_field() }}
                    <div class="field">
                        <label class="label" for="name">Fridge Name</label>
                        <div class="control">
                            <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="Fridge Name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="owner">Fridge Owner</label>
                        <div class="control">
                            <input type="text" class="input {{ $errors->has('owner') ? 'is-danger' : '' }}"name="owner" placeholder="Fridge Owner" value="{{old('owner')}}">
                        </div>
                    </div>
                    <?php
                        $user_id = auth()->user()->id;
                    ?>
                    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">

                    <div>
                        <button type="submit">Create Fridge</button>
                    </div>
                    @if ($errors->any())
                        <div class="notification is-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </section>
    
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
