<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@index');
    Route::get('/table', 'App\Http\Controllers\HomeController@table');
    Route::get('/find', 'App\Http\Controllers\HomeController@find');
    Route::post('/insert', 'App\Http\Controllers\HomeController@insert');
    Route::post('/update', 'App\Http\Controllers\HomeController@update');
    Route::post('/delete', 'App\Http\Controllers\HomeController@delete');
});
