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

Route::get('/',function()
{	
	return view('Helo');
});

Route::get('/form',function()
{	
	return view('form');
});

Route::post('/register',"UserController@register");

Route::get('/all', "UserController@all");

Route::get('/user/{id}', "UserController@find");

Route::get('/user/edit/{id}', "UserController@show");

Route::post('user/edit/{id}', "Usercontroller@update");

