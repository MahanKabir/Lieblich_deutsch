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

Route::get('/','masterController@index');

Route::resource('admin/dict','dictController');
Route::resource('admin/book','bookController');
Route::get('book','masterController@book');
Route::get('dictionary','masterController@dictionary');
Route::get('games','masterController@XO');

