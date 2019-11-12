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