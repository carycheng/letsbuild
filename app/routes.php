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

Route::get('/', function()
{
	return View::make('test1');
});

/*Route::get('/', 'test1');*/
Route::post('/controllers', 'ProjectsController@postProject');

Route::get('/redirect', function(){
	return View::make('redirectest');
});
