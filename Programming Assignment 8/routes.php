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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
	Route::get('/locations', 'LocationController@index');

	Route::get('/stories', 'StoryController@index');

	Route::get('/tags', 'TagController@tags');
	
	Route::get('/story/create', 'StoryController@create');
	
	Route::post('/story/store', 'StoryController@store');

});
