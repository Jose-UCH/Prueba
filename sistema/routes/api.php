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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::group(['prefix' => 'api/v1'], function () {
	Route::get('employees', 'api\EmployeeController@index');
  // Route::get('user',      'Api\v1\UserController@index');
  // Route::get('user/{id}', 'Api\v1\UserController@show');
// });


