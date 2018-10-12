<?php

use Illuminate\Http\Request;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

Route::get('buildings', 'BuildingController@index');
Route::get('buildings/{building}', 'BuildingController@show');
Route::get('buildings/user/{user}', 'BuildingController@getByUser');
Route::post('buildings', 'BuildingController@store');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::get('users/building/{building}', 'UserController@getByBuilding');
Route::post('users', 'UserController@store');

Route::get('user-buildings', 'UserBuildingController@index');
Route::post('user-buildings', 'UserBuildingController@store');
