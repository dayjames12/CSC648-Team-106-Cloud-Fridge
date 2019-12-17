@extends('layouts.app')

@section('content')

{{-- <navbar-component></navbar-component>--}}
{{-- enables usage of bulma icons --}}
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>


<section class="section">


    <div class="block">
        <div class="container">
            <div id="foodlist_date" class="notification" style="background:#b0e5ff; border-radius:15px;">
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div class="action-buttons">
                            <a id="foodlisi"class="button is-link" style="background: transparent; border: none;">
                                <i class="fa fa-chevron-left">
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <h2 class="title" style="color:white;">Thursday</h2>
                            <p class="h1" style="color:white;">Oct 22</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div class="action-buttons">
                            <a class="button is-link" style="background: transparent; border: none;">
                                <i class="fa fa-chevron-right">
                                </i>
                            </a>
                        </div>
                    </div>

                </nav>

            </div>

            <div class="container has-text-centered" style="padding-top: 30px;">
                <div class="container" style="border-radius: 25px; padding-bottom: 5%;">
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
                                <h2 class="title is-2" style="color:rgb(91, 192, 222);"> Today: </h2>
                            </div>
                        </div>
                        <div class="column is-half is-narrow" style="padding-left: 30%;">
                            <div class="placeHolder">
                                <figure class="image is-128x128">
                                    {{-- Just a placeholder for now --}}
                                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                                </figure>
                            </div>
                        </div>


                    </div>


                </div>

               
            </div>


        </div>



    </div>


    <!-- Temporary Area for the modal. 
    
    Grocery Modal only works when clicking from the Foodlist page 

    -->
    <div id="modal-grocery" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
            <p class="modal-card-title">Grocery</p>
            <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <aside>
                    <h1>Groceries</h1>

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
                <button class="button is-info">Add Items</button>
                <button class="button is-danger">Clear All</button>
            </footer>
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
            <a id="grocery" class="navbar-item is-expanded is-block has-text-centered" href="">
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
 
    </div>
</section>

@endsection