<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/signup', function () {
    return view('authpage');
});

Route::get('/login', function () {
    return view('loginpage');
});

Route::get('/product', function () {
    return view('product');
});


Route::get('/products', 'cakeController@index');
Route::post('/products','CartController@save');
Route::get('/cart','CartController@show');