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

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba/{name}', 'PruebaController@prueba');

Route::get('/prueba', 'PruebaController@show');
Route::get('pp/{name}/apellido/{ap}', 'PruebaController@index');
Route::resource('/trainers','TrainerController');
Route::resource('/shop/create','ShopController');
Route::get('/games/create','GamesController@create');
Route::get('/producto/create','ProductoController@create');
Route::get('/pedido/create','PedidoController@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('login/google', 'Auth\LoginController@redirectToProvider');
//Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Auth::routes();
Route::get('/login/google/redirect','SocialController@redirect');
Route::get('/login/google/callback','SocialController@callback');
Route::get('/login/facebook/redirectf','SocialController@redirectf');
Route::get('/login/facebook/callbackf','SocialController@callbackf');

