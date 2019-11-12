@extends('layouts.app')

@section('content')
{{-- <navbar-component></navbar-component>--}}
<section class="section">
    <div class="container">

        <div class="block">
            <div class="notification">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        Add Item
                        </p>
                    </div>
                </div>
                <form method="POST" action="/home">
                @csrf

                    <div>
                        <input type="text" name="name" placeholder="Item name">
                    </div>

                    <div>
                        <input type="integer" name="quantity" placeholder="Item amount">
                    </div>

                    <div>
                        <input type="date" name="expiration" placeholder="Expiration date">
                    </div>

                    <div>
                        <button type="submit">Add item</button>
                    </div>
                </form>
            <div class="notification">
        </div>

    </div>
</section>
@endsection

