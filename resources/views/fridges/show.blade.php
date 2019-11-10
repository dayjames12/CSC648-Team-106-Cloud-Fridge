@extends('layouts.app')

@section('title','Fridge Edit')

@section('content')
<h1 class="name">{{ $fridge->name }}</h1>

<div class="content">
    {{ $fridge->creator}}
</div>

<p>
    <a href="/fridges/{{$fridge->id}}/edit">Edit</a>
</p>
@endsection
