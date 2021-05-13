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

Route::group(['middleware' => 'web'], function () {

    //Home
    Route::get('/', 'Site\HomeController@get_index');

    //Feeds
    Route::get('intro', 'Site\AudioController@get_intro');
    Route::get('record', 'Site\AudioController@get_record');
    Route::get('feeds', 'Site\AudioController@get_feeds');

    //Login
    Route::get('login', ['as' => 'login', 'uses' => 'Site\AuthController@get_login']);
    Route::post('login', 'Site\AuthController@post_login');
    Route::get('logout', 'Site\AuthController@get_logout');

    //Register
    Route::get('register', 'Site\AuthController@get_register');
    Route::post('register', 'Site\AuthController@post_register');

    //Feeds
    Route::get('feed/audio/{id}', 'Site\AudioController@get_single_feed');
    Route::post('feed/audio/{id}', 'Site\AudioController@post_rating');

    //Audio Upload
    Route::get('audio/add', 'Site\AudioController@get_add_audio');
    Route::post('audio/add', 'Site\AudioController@post_audio');

});
