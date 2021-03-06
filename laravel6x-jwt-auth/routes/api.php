<?php

use Illuminate\Http\Request;

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

//Public Routes
Route::post('login', 'Api\AuthController@login');
Route::post('refresh', 'Api\AuthController@refresh');

//Restrict Routes
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Api\AuthController@logout');
    Route::apiResource('user', 'UserController');
});
