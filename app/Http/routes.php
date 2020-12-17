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

Route::get('/', 'HomeController@home');
Route::auth();
// Route::post('/register', 'Auth/AuthController@create');
Route::get('/home', 'HomeController@index');
Route::get('/registeruser_ad','UserController@add_user_administrativo')->name('register_user_administrativo');
Route::get('/registeruser_aca','UserController@add_user_academico')->name('register_user_academico');
Route::post('/registerUser','UserController@registrarUsuario')->name('add_user');
// informes
Route::get('/informes', 'InformeController@index')->name('informe_index');
//unidad
// Route::get('unidad', 'UnidadController@index')->name('unidad');
// Route::get('unidad/create', 'UnidadController@create')->name('unidad.create');
// Route::post('unidad/create', 'UnidadController@create')->name('unidad.storage');
// Route::delete('unidad/{$id}', 'UnidadController@destroy')->name('unidad.destroy');

Route::resource('facultad', 'FacultadController');

Route::resource('unidad', 'UnidadController');
Route::get('facultad/{facultad_id}/unidad', 'UnidadController@index');
Route::get('facultad/{facultad_id}/unidad/create', 'UnidadController@create');
Route::post('facultad/{facultad_id}/unidad/store', 'UnidadController@store');

Route::resource('carrera', 'CarreraController');
Route::get('facultad/{facultad_id}/carrera', 'CarreraController@index');
Route::get('facultad/{facultad_id}/carrera/create', 'CarreraController@create');
Route::post('facultad/{facultad_id}/carrera/store', 'CarreraController@store');

Route::resource('materia', 'MateriaController');
Route::get('facultad/{facultad_id}/materia', 'MateriaController@index');
Route::get('facultad/{facultad_id}/materia/create', 'MateriaController@create');
Route::post('facultad/{facultad_id}/materia/store', 'MateriaController@store');

Route::resource('grupo', 'GrupoController');
Route::get('facultad/{facultad_id}/materia/{materia_id}/grupo/', 'GrupoController@index');
Route::get('facultad/{facultad_id}/materia/{materia_id}/grupo/create', 'GrupoController@create');
Route::post('facultad/{facultad_id}/materia/{materia_id}/grupo/store', 'GrupoController@store');
