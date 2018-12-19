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

//auth routes
Auth::routes();

//site routes
Route::get('/', 'HomeController@index')->name('site.home');
Route::get('/a-empresa', 'AboutController@index')->name('site.about');
Route::post('/contato', 'ContatoController@store')->name('site.contato');

Route::get('/beauty-market', function(){
    return view('site.beautyMarket');
})->name('site.beautyMarket');

Route::get('/compra-programada', function () {
    return view('site.compraProgramada');
})->name('site.compraProgramada');

Route::get('/tabloide', function () {
    return view('site.tabloide');
})->name('site.tabloide');


//dashboard routes
Route::group([
    'prefix' => 'dashboard', 
    'middleware' => 'auth'
], function () {
    Route::get('/', 'Dashboard\HomeController@index')->name('dashboard.home');
    Route::get('/about', 'Dashboard\AboutController@index')->name('dashboard.about');
    Route::patch('/about', 'Dashboard\AboutController@update')->name('dashboard.about.update');
    Route::post('/about/banner', 'Dashboard\BannersController@store')->name('dashboard.about.banner');
    Route::get('/tabloides', 'Dashboard\TabloidesController@index')->name('dashboard.tabloide');
    Route::get('/produtos', 'Dashboard\ProdutoController@index')->name('dashboard.produtos');
});