@extends('layouts.app')

@section('title','Fridge Create')

@section('content')
    <h1>Create a new fridge</h1>

    <form method="POST" action="/fridges">
    {{ csrf_field() }}
        <div class="field">
            <label class="label" for="name">Fridge Name</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" placeholder="Fridge Name" value="{{old('name')}}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="creator">Fridge Creator</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('creator') ? 'is-danger' : '' }}"name="creator" placeholder="Fridge Creator" value="{{old('creator')}}">
            </div>
        </div>
        <?php
            $user_id = auth()->user()->id;
        ?>
        <input type="text" class="input {{ $errors->has('user_id') ? 'is-danger' : '' }} "name="user_id" value="{{old($user_id)}}">

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
