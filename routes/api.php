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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers\Api'
], function($router){
    // Route::post('login', ['as'=> 'login', 'uses'=> 'AuthController@login']);
    // Route::post('register', ['as'=> 'register', 'uses'=> 'AuthController@register']);
    // Route::post('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::get('me', 'AuthController@me');

    Route::get('persones', 'PersonController@index');
    //Route::post('users/store', 'UserController@store');
    Route::get('persone/{id}', 'PersonController@show');
    // Route::put('users/{id}', 'UserController@update');
    // Route::delete('users/{id}', 'UserController@destroy');


//     Route::post('/save', [ChatController::class, "saveMessage"])->name('save');
// Route::get('/load', [ChatController::class, "loadMessage"])->name('load');
// Route::post('/room', [RoomController::class, "create"])->name('room.create');



});
//Route::apiResource('/api/users', 'Api\UserController');

//Route::apiResource('/api/users', \App\Http\Controllers\Api\UserController::class);
//Route::get('/api/users', [\App\Http\Controllers\Api\UsersController::class, 'index']);
