@extends('layouts.app')

@section('title','Fridge Index')

@section('content')
    <h1>Fridges from database</h1>
    
    <ul>
        @foreach($fridges as $fridge)
            <li>
                <a href="/fridges/{{ $fridge->id }}">
                    {{$fridge->name }}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="buttons">
        <a class="button is-primary" href="/fridges/create">Create New Fridge</a>
    </div>
@endsection
