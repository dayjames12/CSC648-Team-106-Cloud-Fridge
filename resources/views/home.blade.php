@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">

        {{-- Attempt Search Box 1 --}}
        <div class="block">
            <div class="field has-addons">
                <p class="control">
                    <input type="text" class="input" placeholder="Search Food List...">
                </p>
                <p class="control">
                    <a href="" class="button is-info">Search</a>
                </p>
            </div>
        </div>

        {{-- Attempt Upload Receipt Box 1 --}}
        <div class="block">
            <div class="field has-addons">
                <p class="control">
                    <input type="text" class="input" placeholder="Upload Receipt...">
                </p>
                <p class="control">
                    <a href="" class="button is-info">Upload</a>
                </p>
            </div>
        </div>

        {{-- Attempt Inventory + Sort By style 1 --}}
        {{-- 
        <div class="block">
            <div class="box">
                <p class ="content is-medium">Inventory <button class="button is-light">Sort By</button></p>
            </div>
        </div>
        --}}

        {{-- Attempt Inventory + Sort By style 2 --}}
        <div class ="block">
            <div class="notification">
                Inventory
                <form>
                    <div class="field">
                        <label class="label">Sort By</label>
                        <p class="control">
                            <span class="select">
                                <select>
                                    <option>Item Name</option>
                                    <option>Expiration Date</option>
                                    <option>Price</option>
                                </select>
                            </span>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        {{-- Attempt at food list --}}
        <div class="block">
            <div class="notification">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                        Title
                        </p>
                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                            Card Footer Item
                        </p>
                    </footer>
                    <footer class="card-footer">
                        <p class="card-footer-item">
                            Card Footer Item 2
                        </p>
                    </footer>
                </div>
            <div class="notification">
        </div>

        {{-- Attempt at food list 2--}}

        {{-- Attempt at bottom navigation bar --}}
        <div class="block">
            <nav class="paginaion is-fixed-bottom">
                {{-- <a href="" class="pagination-previous" disabled>Previous</a>
                <a href="" class="pagination-next">Next Page</a> --}}
                <ul class="pagination-list">
                    <li>
                        <a href="" class="pagination-link is-current">Inventory</a>
                    </li>
                    <li>
                        <a href="" class="pagination-link">Grocery List</a>
                    </li>
                    <li>
                        <a href="" class="pagination-link">Recipe</a>
                    </li>
                    <li>
                        <a href="" class="pagination-link">Food List</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>
@endsection

