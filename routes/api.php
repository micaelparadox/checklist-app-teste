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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/cakes', 'App\Http\Controllers\Api\CakeController@index');
Route::post('/cakes', 'App\Http\Controllers\Api\CakeController@store');
Route::get('/cakes/{cake}', 'App\Http\Controllers\Api\CakeController@show');
Route::put('/cakes/{cake}', 'App\Http\Controllers\Api\CakeController@update');
Route::delete('/cakes/{cake}', 'App\Http\Controllers\Api\CakeController@destroy');

Route::post('/cakes/hermes-feet', 'App\Http\Controllers\Api\CakeHermesFeetController@store');



