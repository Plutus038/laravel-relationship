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
    return view('relationship');
});


Route::get('/', 'UserController@index');

Route::get('/has-one', 'UserController@hasOne');

Route::get('/belongs-to', 'UserController@belongsTo');

Route::get('/has-many', 'UserController@hasMany');

Route::get('/has-many-inverse', 'UserController@hasManyInverse');

Route::get('/many-to-many', 'UserController@manyToMany');

Route::get('/has-many-through', 'UserController@hasManyThrough');

Route::get('/polymorphic', 'UserController@polymorphic');

Route::get('/many-to-many-polymorphic', 'UserController@manyToManyPolymorphic');

Route::get('/eagar-load', 'UserController@eagarLoading');

Route::get('/lazy-eager-load', 'UserController@lazyEagarLoad');
