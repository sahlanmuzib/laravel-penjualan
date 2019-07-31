<?php

Route::get('/', function () {
    return view('welcome');
});


//route admin
Route::get('/index', 'AdminController@index');
Route::get('/create', 'AdminController@create');
// samakan dengan url yang ada di form folder index
Route::post('/create', 'AdminController@store');
route::get('/detail', 'AdminController@Detail');



//route user
route::get('/websiteku', 'UserController@index');

