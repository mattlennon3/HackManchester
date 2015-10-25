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
Route::post('/challenges', 'ViewChallengeController@returnResults');

// Register Charity Page
Route::get('/charity', function(){
	return view('static.register-charity');
});

// About Charity Page
Route::get('/about', function(){
	return view('static.about');
});
Route::get('/facebook/login', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
    $login_link = $fb
            ->getRedirectLoginHelper()
            ->getLoginUrl('https://exmaple.com/facebook/callback', ['email', 'user_events']);

    return '<a href="' . $login_link . '">Log in with Facebook</a>';
});

// Header-Challenge Module
// Post requests for ajax
Route::post('/getChallengesByCat', 'CreateChallengeController@getChallenges');

Route::post('/login', 'NavbarController@login');

Route::get('/logout', 'NavbarController@logout');