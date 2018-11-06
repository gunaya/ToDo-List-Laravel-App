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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::post('todo/', 'TodoController@readData');
Route::post('todo/create/', 'TodoController@createData');
Route::post('todo/delete/', 'TodoController@deleteData');
Route::post('todo/update/', 'TodoController@updateData');
Route::post('todo/set/finish/', 'TodoController@setFinished');
Route::post('todo/set/repeat/', 'TodoController@setRepeat');