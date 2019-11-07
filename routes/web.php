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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'ItemsController@store');

Route::view('ocr','ocr');

Route::get('/fridges', 'FridgesController@test');

Route::get('/items/create', 'ItemsController@create');
Route::delete('items/{item}', 'ItemsController@destroy');