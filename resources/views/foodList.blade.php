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

