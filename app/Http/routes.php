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

Route::get('/', function () {
    return view('welcome');
});

Route::post('register', 'Auth\AuthController@register1');
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');


///// admin
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/send', 'HomeController@send');
Route::post('/send', 'HomeController@createMessage');

/////////////// user

Route::get('/user', 'HomeController@user');
Route::get('/home', 'HomeController@index');
