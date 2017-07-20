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

Route::get('/product', 'ProductController@index');
Route::get('/product/new', 'ProductController@create');
Route::post('/product', 'ProductController@store');
Route::get('/product/{product}', 'ProductController@show');
Route::get('/product/{product}/edit', 'ProductController@edit');
Route::post('/product/{product}', 'ProductController@update');
Route::post('/product/{product}', 'ProductController@destroy');