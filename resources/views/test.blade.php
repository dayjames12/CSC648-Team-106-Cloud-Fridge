@extends('layouts.app')

@section('content')
    <h1>Fridges from database</h1>
    
    @foreach($fridges as $fridges)
        <li>{{$fridges->name}}</li>
    @endforeach
@endsection
