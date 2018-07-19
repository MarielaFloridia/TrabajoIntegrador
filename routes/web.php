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

Route::get('/postulantes/{nombre}/{apellido?}', function ($nombre,$apellido=null) {
    return 'Welcome '.$nombre.' '.$apellido.' !';
}); //con ? en el get y con =null en la función se permite recibir parámetros optativos. 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
