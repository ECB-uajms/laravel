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
Route::get ('/ssd', function(){
	return 'Hello World, ruta';
});
Route::get('prueba/{name}', 'PruebaController@prueba');

Route::get('/prueba', 'PruebaController@show');
Route::get('pp/{name}/apellido/{ap}', 'PruebaController@index');
Route::resource('trainer','TrainerController');