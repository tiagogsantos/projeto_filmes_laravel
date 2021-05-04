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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    /** Formulário de Login */
    Route::get('/', 'AuthController@showLoginForm')->name('login');

    Route::post('login', 'AuthController@login')->name('login.do');

    /** Rotas Protegidas */
    Route::group(['middleware' => ['auth']], function () {

        /** Dashboard Home */
        Route::get('home', 'AuthController@home')->name('home');

        /** Films */
        Route::post('films/image-set-cover', 'FilmsController@imageSetCover')->name('films.imageSetCover');
        Route::delete('films/{id}', 'FilmsController@destroy')->name('films.destroy');
        Route::resource('films', 'FilmsController');

        /** Series */
        Route::post('series/image-set-cover', 'SeriesController@imageSetCover')->name('series.imageSetCover');
        Route::delete('series/image-remove', 'SeriesController@imageRemove')->name('series.imageRemove');
        Route::resource('series', 'SeriesController');

        Route::post('season/image-set-cover', 'SeasonController@imageSetCover')->name('season.imageSetCover');

        Route::delete('season/{id}', 'SeasonController@destroy')->name('season.destroy');

        Route::resource('season', 'SeasonController');
    });

    /** Logout */
    Route::get('logout', 'AuthController@logout')->name('logout');

});


