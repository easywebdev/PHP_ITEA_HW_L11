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

//GITHUB
//Route::get('/', 'Auth\LoginController@redirectToProvider');
//Route::get('callbeck', 'Auth\LoginController@handleProviderCallback');

// GOOGLE
//Route::get('/', 'Auth\GoogleLoginController@redirectToProvider');
//Route::get('calback', 'Auth\GoogleLoginController@handleProviderCallback');

//FACEBOOK
Route::get('/', 'Auth\FBLoginController@redirectToProvider');
Route::get('calback', 'Auth\FBLoginController@handleProviderCallback');
