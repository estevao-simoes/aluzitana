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

Route::get('/tabloide', 'TabloideController@index')->name('site.tabloide');


//dashboard routes
Route::group([
    'prefix' => 'dashboard', 
    'middleware' => 'auth'
], function () {
    Route::get('/', 'Dashboard\HomeController@index')->name('dashboard.home');
    Route::get('/about', 'Dashboard\AboutController@index')->name('dashboard.about');
    Route::patch('/about', 'Dashboard\AboutController@update')->name('dashboard.about.update');
    Route::post('/about/banner', 'Dashboard\BannersController@store')->name('dashboard.about.banner');
    Route::get('/tabloides', 'Dashboard\TabloideController@index')->name('dashboard.tabloide');
    Route::post('/tabloides', 'Dashboard\TabloideController@store')->name('dashboard.tabloide.store');
    Route::get('/tabloides/create', 'Dashboard\TabloideController@create')->name('dashboard.tabloide.create');
    Route::get('/tabloide/{tabloide}', 'Dashboard\TabloideController@show')->name('dashboard.tabloide.show');
    Route::delete('/tabloide/destroy/{tabloide}', 'Dashboard\TabloideController@destroy')->name('dashboard.tabloide.destroy');
    Route::get('/produtos', 'Dashboard\ProdutoController@index')->name('dashboard.produtos');
    Route::patch('/produto/{produto}', 'Dashboard\ProdutoController@update')->name('dashboard.produtos.update');
    Route::get('/banners', 'Dashboard\BannersController@index')->name('dashboard.banners');
    Route::delete('/banner/{banner}', 'Dashboard\BannersController@destroy')->name('dashboard.banners.destroy');
    Route::get('/contatos', 'Dashboard\ContatoController@index')->name('dashboard.contato');
    Route::delete('/contato/{contato}', 'Dashboard\ContatoController@destroy')->name('dashboard.contato.destroy');
});