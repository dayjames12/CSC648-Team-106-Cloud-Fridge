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
@endsection
