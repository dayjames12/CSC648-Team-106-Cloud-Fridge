<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\FridgesController;

Route::get('/', function () {
    return view('welcome');
});

/* Grocery List View */
Route::get('/groceryList', function () {
    $items = \App\Item::groceryList()->get();

    return view('groceryList', ['items' => $items]);
});
Route::post('/groceryList', 'ItemsController@store');

/* Recipe View */
Route::get('/recipe', function () {
    return view('recipe');
});
/* Food Report View */
Route::get('/foodList', function () {
    return view('foodList');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'ItemsController@store');

Route::get('/items/create', 'ItemsController@create');
Route::get('/items/search', 'ItemsController@search');
Route::post('/items/sort', 'ItemsController@sort');
Route::delete('items/{item}', 'ItemsController@destroy');

Route::get('/ocr', function (){
    return view('ocr');
});

Route::resource('fridges','FridgesController');