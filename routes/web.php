<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Http/Middleware/BasicAuth.php -> create new
//Http/kernel.php
//route/web.php
//route/api.php


//here
Route::middleware(['basicAuth'])->group(function () {
    //All the routes are placed in here
    Route::get('/', function () { return view('welcome'); });
});
//akses
//http://127.0.0.1:8000/
//username admin
//password admin