@extends('layouts.app')

@section('title','Fridge Edit')

@section('content')
    <h1>Fridges Edit</h1>

    <form method="POST" action="/fridges/{{ $fridge->id }}">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="name">Name</label>
        </div>
        <div class="control">
            <input type="text" name="name" placeholder="Name" value="{{ $fridge->name }}">
        </div>
        <div class="field">
            <label class="label" for="creator">Creator</label>
        </div>
        <div class="control">
            <input type="text" name="creator" placeholder="Creator" value="{{ $fridge->creator }}">
        </div>
        <div class="field" style="margin: .5em">
            <div class="control">
                <button type="submit" class="button is-link">Update Fridge</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/fridges/{{ $fridge->id }}">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control" style="margin: .5em">
                <button type="submit" class="button">Delete Fridge</button>
            </div>
        </div>
    </form>

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
