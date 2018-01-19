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



Route::get('/a', function () {
    return view('layouts.admin');
});

Route::resource('/','GuestController');

Route::get('/detail/{id}', 'GuestController@detail');

Route::resource('rumah','RumahController');
Auth::routes();

Route::get('/tampilann','tampilanController@index');

Route::get('/home', 'HomeController@index');
Route::resource('/rumah','rumahController');
Route::resource('/agen','agenController');
