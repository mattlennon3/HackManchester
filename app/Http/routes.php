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

// Home
Route::get('/', 'HomeController@show');

// Dashboard Module
Route::get('/dashboard', 'DashboardController@show');

// Challenges View Page
Route::get('/challenges', 'ViewChallengeController@show');

// Register Charity Page
Route::get('/charity', function(){
	return view('static.register-charity');
});

// About Charity Page
Route::get('/about', function(){
	return view('static.about');
});

