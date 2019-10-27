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

//here
Route::middleware(['basicAuth'])->group(function () {
    //All the routes are placed in here
    Route::get('/', function () { echo "JSON"; });
    Route::get('/test', function () { echo "JSON"; });
});

//http://127.0.0.1:8000/api/test
//basic auth
//username admin
//pass admin
