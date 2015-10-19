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

Route::get('/articles','ArticleController@index');

Route::get('/articles/create','ArticleController@create');

Route::post('/articles/store','ArticleController@store');

Route::get('/articles/{id}','ArticleController@show');

//通过php artisan route:list 生成
//Route::resource('articles','ArticleController');

Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route:get('auth/logout','Auth\AuthController@getLogout');