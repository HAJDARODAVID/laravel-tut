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

/*stal sam na https://www.youtube.com/watch?v=2mqsVzgsV_c -> 59:35*/

Route::get('/', function () {

    return view('welcome');
});
