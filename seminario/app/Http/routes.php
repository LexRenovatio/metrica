<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FrontController@index');
Route::get('home','FrontController@home');
Route::resource('log','LogController');
Route::resource('usuario','UsuarioController');
Route::resource('rol','RolController');
Route::get('cerrar','LogController@logout');
Route::resource('acuerdo','AcuerdoController');
Route::resource('riesgo','RiesgoController');
Route::resource('impedimento','ImpedimentoController');
Route::resource('datosburndown','DatosburndownController');
Route::resource('burndown','BurndownController');
Route::resource('datossprint','DatossprintController');
Route::resource('sprint','SprintController');

Route::get( 'posts', 'ServicioController@index' );
Route::get( 'posts/{id}', 'ServicioController@show' );