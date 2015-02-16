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


// Front End Routes
Route::get('/', function()
{
	return View::make('landing');
});
Route::get('/search', function() {
	return View::make('search.search');
});
Route::post('/search', 'ProjectsController@findProject');
Route::get('/post', function() {
	return View::make('post.post');
});
Route::post('/post', 'ProjectsController@postProject');



/*Route::get('/', 'test1');*/
Route::post('/controllers', 'ProjectsController@postProject');

Route::get('/redirect', function(){
	return View::make('redirectest');
});

// API Routes

Route::get('/delete', 'ProjectsController@deletePost');

Route::post('/find', 'ProjectsController@findProject');