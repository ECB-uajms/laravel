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
Route::resource('/shop','ShopController');
Route::resource('/producto','ProductoController');
Route::resource('/pedido','PedidoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/login/{provider}/','Auth\SocialAuthController@redirectToProvider');
Route::get('/login/{provider}/callback','Auth\SocialAuthController@handleProviderCallback');

