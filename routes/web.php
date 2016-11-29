<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {


    return view('index');// The index page of the project
});


Route::post('upload', 'mainController@index');
// The image upload route

Route::get('test', 'mainController@test');
// An admin route for getting the total collections in the database

Route::post('db', 'mainController@db');
//The search function route

Route::get('deleteColl', 'mainController@deleteCollections');
// An admin route to purge the image collections

