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

//validation and filling signup data into users table
Route::get('/signup', function () {
    return view('authpage');
});
Route::post('userdetail','SignupController@submit');

//login routes

Route::get('/login','LoginController@index');
Route::post('/checkLogin','LoginController@checkLogin');
Route::get('successLogin','LoginController@successLogin');
Route::get('logout','LoginController@logout');

//admin routes
Route::get('/admin','AdminController@index');
Route::post('/adminProduct','AdminController@productSelector');
Route::get('/product','ProductController@index');
Route::post('/addProduct','ProductController@addProduct');
