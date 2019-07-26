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

// Route::resource('programs', 'ProgramController');

Route::prefix('programs/{program}')->group(function(){
    Route::resource('/', 'ProgramController');
    Route::resource('home', 'HomeController');
    Route::resource('cme', 'CMEController');
    Route::resource('faculty', 'FacultyController');
    Route::resource('monograph', 'MonographController');
});