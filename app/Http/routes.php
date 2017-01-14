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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/polis', 'HomeController@polis')->name('polis');
Route::get('/newlicense', 'HomeController@newlicense');
Route::get('/countersigned', 'HomeController@getcountersigned');
