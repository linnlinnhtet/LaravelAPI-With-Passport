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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//User
Route::prefix('v1/user')->group(function(){
    Route::post('/login', 'Api\V1\LoginController@login');
    Route::middleware('auth:api')->get('/all','Api\V1\user\UserController@index');
});
