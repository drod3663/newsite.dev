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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showHomepage');

Route::get('/posts/manage', 'PostsController@getManage');

Route::get('/posts/list', 'PostsController@getList');
 
Route::resource('posts', 'PostsController');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/about', 'HomeController@showAbout');

Route::get('/contact', 'HomeController@showContact');

Route::get('/whackamole', 'HomeController@showMole');

Route::get('/calculator', 'HomeController@showCalculator');

Route::get('/simplesimon', 'HomeController@showSimon');

Route::get('/animate', 'HomeController@showAnimate');



Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');