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
//$router->resource('posts', 'PostController');
Route::get('/',['as'=> 'posts', 'uses' => 'PostController@index']);
Route::get('unpublished',['as'=> 'posts.unpublished', 'uses' => 'PostController@unpublished']);
Route::get('published',['as'=> 'posts.index', 'uses' => 'PostController@index']);


Route::get('posts/{id}/edit', ['as'=> 'posts.edit', 'uses' => 'PostController@edit']);
Route::patch('update', 'PostController@update');
Route::post('update/{id}', 'PostController@update');
Route::get('home', 'HomeController@index');

Route::get('create', ['as' => 'posts.create', 'uses' => 'PostController@create']);
Route::post('create', ['as' => 'posts.store', 'uses' => 'PostController@store']);
Route::get('posts/{id}', ['as'=>'posts.show', 'uses'=> 'PostController@show']);
//Route::get('destroy', ['as' => 'posts', 'uses' => 'PostController@delete']);
Route::post('destroy', ['as'=> 'posts.destroy', 'uses'=> 'PostController@destroy']);


/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

