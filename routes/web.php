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
Route::get('/countersigned', 'HomeController@getcountersigned');
