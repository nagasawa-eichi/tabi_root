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

Route::get('/', 'RootController@index');
Route::get('/roots/create', 'RootController@create');
Route::post('/roots', 'RootController@store');

Route::get('/roots/{root}', 'RootController@show');
Route::get('/roots/{root}/edit', 'RootController@edit');

Route::put('/roots/{root}','RootController@update');

Route::delete('/roots/{root}', 'RootController@delete');