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
Route::get('/byyou', 'ByYouController@getByYou');

Route::get('/foryou', 'ForYouController@getForYou');

// Challenges View Page
Route::get('/challenges', 'ViewChallengeController@show');
Route::post('/challenges', 'ViewChallengeController@returnResults');
Route::post('/', 'HomeController@saveUser');
//Route::post('/', 'HomeController@getFriends');

// Register Charity Page
Route::get('/charity', function(){
	return view('static.register-charity');
});

// About Charity Page
Route::get('/about', function(){
	return view('static.about');
});
Route::get('/boo', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
    			$login_link = $fb
            ->getRedirectLoginHelper()
            ->getLoginUrl('http://localhost/Hackmanchester/public', ['email', 'user_events']);

    return '<a href="' . $login_link . '">Log in with Facebook</a>';
});

// Header-Challenge Module
// Post requests for ajax
Route::post('/getChallengesByCat', 'CreateChallengeController@getChallenges');
Route::get('/getCharities', 'SelectCharityController@getCharities');

// Nav Bar
Route::post('/login', 'NavbarController@login');
Route::get('/logout', 'NavbarController@logout');