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
@endsection
