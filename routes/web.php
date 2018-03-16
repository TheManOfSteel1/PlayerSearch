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
    return view('main');
});


Route::get('/playerstat', function () {
    return view('playerstat');
    return redirect()->route('view.playerstat');
});


Route::get('/about', function () {
    return view('about');
});

Route::post('/get_player', 'ApiPeopleSearchController@searchPlayer'); //input the method name, "api controller name plus function name created in the api controller"
