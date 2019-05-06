<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
	->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/name{name}/nick/{nickname}', 'WelcomeUserController');