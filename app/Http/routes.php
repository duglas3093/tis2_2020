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