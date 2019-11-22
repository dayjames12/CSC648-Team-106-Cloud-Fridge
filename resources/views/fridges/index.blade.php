@extends('layouts.app')

@section('title','Fridge Index')

@section('content')

<section>
    <div class="hero is-info ">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Fridges From Database</h1>
               
            </div>
        </div>
    </div>
  
    <section class="section">
   
        <div class="tile is-ancestor">
            <div class="tile is-4 is-vertical">
                @foreach($fridges as $fridge)
                    <div class="tile is-parent">
                    <!-- Top tile -->
                        <article class="tile is-child notification is-primary is-5">
                            <a href="/fridges/{{ $fridge->id }}" style="text-decoration:none">
                                {{$fridge->name }}
                            </a>
                        </article>
                    </div>
                @endforeach
             
            </div>
            
        </div>

    
        <div class="columns">
            <div class="column">
                <div class="buttons">
                    <a class="button is-primary" href="/fridges/create">Create New Fridge</a>
                </div>
            </div>
        </div>
    </section>
</section>
    
@endsection
