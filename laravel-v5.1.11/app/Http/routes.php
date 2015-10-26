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

//Route::get('/articles','ArticleController@index');
//
//Route::get('/articles/create','ArticleController@create');
//
//Route::post('/articles/store','ArticleController@store');
//
//Route::get('/articles/{id}','ArticleController@show');

Route::group(['prefix' =>'auth','namespace' => 'Auth'],function() {

    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');

    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');

    Route: get('logout', 'AuthController@getLogout');

});

//namespace 来控制命名空间
Route::group(['middleware' => 'auth'],function(){
//通过php artisan route:list 生成
    Route::resource('/articles','ArticleController');
    Route::get('/articles/{id}/destroy','ArticleController@destroy');
});


Route::get('/test','TestUpDateController@index');
Route::post('/test','TestUpDateController@store');

Route::get('/test_ajax','TestUpDateController@index_ajax');
Route::post('/test_ajax','TestUpDateController@store_ajax');

// API  Route
$api = app('api.router');
$api->version('v1', function ($api) {
    $api->get('users', 'App\Http\Controllers\Api\V1\UserController@index');
});