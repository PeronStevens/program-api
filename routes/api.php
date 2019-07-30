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

Route::get('/', function(){
    return 'Heyyy';
});

Route::prefix('programs/{program}')->group(function(){
    Route::get('/', 'ProgramController@index');
    Route::get('home', 'HomeController@index');
    Route::get('cme', 'CMEController@index');
    Route::get('faculty', 'FacultyController@index');
});