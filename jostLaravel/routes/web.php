<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/help', function () {
    return view('ayuda');
});
Route::get('/host', function () {
    return view('host');
});

Route::get('/login', function () {
    return view('sesion');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', Auth::logout());




//Route::get('/register', function () {
//    return view('registracion');
//});