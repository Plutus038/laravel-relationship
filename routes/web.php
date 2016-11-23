<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/has-one', 'UserController@hasOne');

Route::get('/belongs-to', 'UserController@belongsTo');

Route::get('/has-many', 'UserController@hasMany');

Route::get('/has-many-inverse', 'UserController@hasManyInverse');

Route::get('/many-to-many', 'UserController@manyToMany');
