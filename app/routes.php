<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::when('', 'auth');

/**
 * Route grouping.
 * Write, Admin page routings.
 */
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return Redirect::to('admin/login');
    });

    Route::get('login', 'loginController@getIndex');

    Route::post('login', 'loginController@login');

    Route::get('top', function () {

        if (Auth::check()) {
            return View::make('admin.top');
        }
        return Redirect::to('admin/login');
    });

    Route::post('logout', 'loginController@logout');
});

/**
 * Route grouping.
 * Write, Front page routings.
 */
Route::group(['prefix' => ''], function () {

    Route::get('/', function () {
        return View::make('hello');
    });
});
