<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$temas = Tema::paginate(10);
	return View::make('principal')->with(['temas' => $temas]);
});

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logOut');

Route::group(['before' => 'auth'], function()
{
	Route::get('admin', function(){
		return View::make('layout.admin');
	});

	Route::resource('tema', 'TemaController');
});

Route::resource('user', 'UserController');
