<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome', ['current' => 'home']);
});

Route::auth();

Route::group(['middleware' => 'current.page'], function () {
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/observation', 'HomeController@observation')->name('observation');
Route::get('/comparation', 'HomeController@comparation')->name('comparation');
Route::get('/revolution', 'HomeController@revolution')->name('revolution');
Route::get('/polis', 'HomeController@polis')->name('polis');
});
Route::get('/newlicense', 'HomeController@newlicense');
Route::get('/countersigned', 'HomeController@getcountersigned');
