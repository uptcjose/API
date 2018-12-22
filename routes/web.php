<?php

Route::get('/','UserController@index');

Route::get('/usuarios','UserController@usuarios');

Route::get('/usuarios/{id}','UserController@show')->where ('id','[0-9]+');

Route::get('/usuarios/nuevo','UserController@nuevoUsuario');

Route::get('/saludo/{name}/{nickname}','WelcomeUserController');