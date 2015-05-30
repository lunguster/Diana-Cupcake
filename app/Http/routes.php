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

Route::get('/',['as'=> 'posts', 'uses' => 'PostController@index']);
Route::get('unpublished',['as'=> 'posts.unpublished', 'uses' => 'PostController@unpublished']);
Route::get('published',['as'=> 'posts.index', 'uses' => 'PostController@index']);
Route::get('show/{id}', ['as'=>'show', 'uses'=> 'PostController@show']);
//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('create', ['as' => 'posts', 'uses' => 'PostController@create']);
Route::post('create', ['as'=> 'addPosts', 'uses'=> 'PostController@post_Store']);
//Route::get('destroy', ['as' => 'posts', 'uses' => 'PostController@delete']);
Route::post('destroy', ['as'=> 'deletePosts', 'uses'=> 'PostController@postDestroy']);
Route::get('edit', ['as'=> 'editPosts', 'uses' => 'PostController@edit']);
Route::post('update', ['uses' => 'PostController@update']);


Route::resource('posts', 'PostController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

