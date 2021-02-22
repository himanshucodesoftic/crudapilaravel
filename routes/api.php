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

Route::post('/new',"App\Http\Controllers\ApiController@create");

// Route::put('studentupdate/{id}',"App\Http\Controllers\ApiController@update");
Route::get('student/{id}',"App\Http\Controllers\ApiController@getbyid");

Route::post('/addEmployee',"App\Http\Controllers\ApiController@addEmployee");
Route::post('updateEmployee/{id}',"App\Http\Controllers\ApiController@updateEmployee");
Route::delete('delete/{id}',"App\Http\Controllers\ApiController@deleteEmployee");