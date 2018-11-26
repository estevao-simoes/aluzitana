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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/a-empresa', 'BeautyMarketController@index')->name('beautyMarket');
Route::post('/contato', 'ContatoController@store')->name('contato');

Auth::routes();
// Route::get('/home', 'Dashboard\HomeController@index')->name('home');
