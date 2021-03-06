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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
Route::get('/movie', 'MovieController@index');

Route::middleware('auth:api')->group(function () {
    Route::get('/movie/{id}', 'MovieController@show');
    Route::get('/delete-movie/{id}', 'MovieController@destroy');
    Route::post('/movie', 'MovieController@new');
});
