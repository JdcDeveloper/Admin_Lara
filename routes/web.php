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

/* Route::get('/', function () {
    return view('welcome');
}); */


/*  poner en mayusculas el nombre del controlador, si  no sale un error */
Route::get('/', ['as'=>'Home','uses'=>'Home@index']);

Route::get('/home', ['as'=>'Home','uses'=>'Home@index']);

Route::get('/dashboard', ['as'=>'Dashboard','uses'=>'Users@dashboard']);

