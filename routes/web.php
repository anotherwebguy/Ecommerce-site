<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\DashboardController@index');


Route::resource('/products','App\Http\Controllers\ProductController');
