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
})->name('home');

Route::auth();

Route::group(['middleware' => 'current.page'], function () {

    Route::post('/submitcountersigned', 'HomeController@submitcountersinged')->name('submit.counter.sign');
    $pages = ['polis', 'propose'];

    foreach ($pages as $page) {
        Route::get('/' . $page, function () use ($page) {
            return view($page);
        })->name($page);
    }
});
Route::get('/newlicense', 'HomeController@newlicense');
Route::get('/countersigned', 'HomeController@getcountersigned');
