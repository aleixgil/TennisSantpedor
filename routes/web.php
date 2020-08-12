<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
