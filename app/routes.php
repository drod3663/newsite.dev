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
// 	return View::make('homepage');
// });

// Route::get('login', function()
// {
// 	return View::make('login');
// });

// Route::get('register', function()
// {
// 	return View::make('register');
// });

Route::get('/', 'HomeController@getIndex');
Route::get('login', 'HomeController@getLogin');
Route::get('register', 'HomeController@getRegister');

Route::post('register', "HomeController@postRegister");
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@logout');

Route::group(array('before' => 'auth'), function(){
	Route::get('admin', 'AdminController@getIndex');
});

// YOUTUBE STUFF ABOVE THIS

// Route::get('/posts/manage', 'PostsController@getManage');

// Route::get('/posts/list', 'PostsController@getList');
 
// Route::resource('posts', 'PostsController');

// Route::get('/resume', 'HomeController@showResume');

// Route::get('/portfolio', 'HomeController@showPortfolio');

// Route::get('/about', 'HomeController@showAbout');

// Route::get('/contact', 'HomeController@showContact');

// Route::get('/whackamole', 'HomeController@showMole');

// Route::get('/calculator', 'HomeController@showCalculator');

// Route::get('/simplesimon', 'HomeController@showSimon');

// Route::get('/animate', 'HomeController@showAnimate');

// Route::any('matriphe/imageupload', function() 
// {
//     $data = [];

//     echo config('imageupload.library');

//     if (Request::hasFile('file')) {
//         $data['result'] = Imageupload::upload(Request::file('file'));
//     }

//     return view('form.blade.php')->with($data);
// });



// Route::get('login', 'HomeController@showLogin');
// Route::post('login', 'HomeController@doLogin');
// Route::get('logout', 'HomeController@doLogout');