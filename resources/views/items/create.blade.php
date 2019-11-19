@extends('layouts.app')

@section('content')
{{-- <navbar-component></navbar-component>--}}
<section class="section">
    <div class="container">

        <div class="block">
            <div class="notification">
                
                <div class="container">
                    <p class="title has-text-left">
                                Add Item
                    </p>
                </div>



                <div class="container ">

                    <form method="POST" action="/home">
                        @csrf
                        <div class="field">
                            <label class="label">Item Name</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="text" placeholder="Text" name="name" required autocomplete="Name">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-utensils"></i>
                                </span>
                            </div>
                            
                        </div>
                        
                        <div class="field">
                            <label class="label">Item Amount</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input" type="integer" placeholder="Amount" name="quantity" required autocomplete="Amount">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-hashtag"></i>
                                </span>
                            
                            </div>
                            
                        </div>
                        
                        <div class="field">
                            <label class="label">Expiration Date</label>
                            <div class="control has-icons-left has-icons-right" >
                                <input class="input" type="date" name="expiration" required autocomplete="Date">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-calendar"></i>
                                </span>
                            
                            </div>
                            
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type = "submit" class="button is-link">Submit</button>
                            </div>
                            <div class="control">
                                <button class="button is-link is-light">Cancel</button>
                            </div>
                        </div>

                        <input type="hidden" name="item_list" value="Fridge">

                    </form>

                </div>
                      <!-- {{-- <form method="POST" action="/home">
               
               
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
                </form> --}} -->
            <div class="notification">
        </div>

    </div>
</section>
@endsection

