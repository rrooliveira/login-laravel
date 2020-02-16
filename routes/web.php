<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', 'MainController@index');
Route::post('/main/validarLogin', 'MainController@validarLogin');
Route::get('/main/loginAceito', 'MainController@loginAceito');
Route::get('/main/logout', 'MainController@logout');
