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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/talent/', 'TalentController@index');
// Route::get('/talent/create', 'TalentController@create');
// Route::post('/talent/', 'TalentController@store');


Route::resource('talent', 'TalentController');


