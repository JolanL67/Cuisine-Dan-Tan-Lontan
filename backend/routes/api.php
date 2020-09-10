<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('v1/presentation', 'Api\V1\PresentationController');

// Route API pour la presentation
Route::get('v1/presentation', 'Api\V1\PresentationController@index');

// Route API pour le menu
Route::get('v1/menu', 'Api\V1\MenuController@index');

// Route API pour le contact
Route::get('v1/contact', 'Api\V1\ContactController@index');

// https://laracasts.com/discuss/channels/laravel/laravel-51-404-response-to-json?page=1
// https://laravel.sillo.org/une-api-avec-laravel-6/
