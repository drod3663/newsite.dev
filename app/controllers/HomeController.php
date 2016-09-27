<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	
	public function getIndex() 
	{
		return View::make('homepage');
	}

	public function getLogin() 
	{
		return View::make('login');
	}

	public function postLogin()
	{
		$input = Input::all();
		$rules = array('email' => 'required', 'password' => 'required');
		$v = Validator::make($input, $rules);
		if($v->fails())
		{
			return Redirect::to('login')->withErrors($v);
		} else { 
			$credentials = array('email' => $input['email'], 'password' => $input['password']);
			if(Auth::attempt($credentials))
			{
				return Redirect::to('admin');
			} else {
				return Redirect::to('login');
			}
		}
	}

	public function getRegister()
	{
		return View::make('register');
	}

	public function postRegister()
	{
		$input = Input::all();

		$rules = array('username' => 'required|unique:users', 'email' => 'required|unique:users|email', 'password' => 'required');

		$v = Validator::make($input, $rules);

		if($v->passes())
		{
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User();
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->save();

			return Redirect::to('login');
		} else {
			return Redirect::to('register')->withInput()->withErrors($v);
		}
	}

	public function logout() 
	{
		Auth::logout();
		return Redirect::to('/');
	}
	/* ABOVE IS FROM YOUTUBE TUTORIAL FOR LOGIN AND REGISTER */

// 	public function showHomepage()
// 	{
// 		return View::make('homepage');
// 	}

// 	public function showWelcome()
// 	{
// 		return View::make('hello');
// 	}

// 	public function showResume()
// 	{
// 		return View::make('resume');
// 	}

// 	public function showPortfolio()
// 	{
// 		return View::make('portfolio');
// 	}

// 	public function showAbout()
// 	{
// 		return View::make('about');
// 	}

// 	public function showContact()
// 	{
// 		return View::make('contact');
// 	}

// 	public function showMole()
// 	{
// 		return View::make('whackamole');
// 	}

// 	public function showCalculator()
// 	{
// 		return View::make('calculator');
// 	}

// 	public function showSimon()
// 	{
// 		return View::make('simplesimon');
// 	}

// 	public function showAnimate()
// 	{
// 		return View::make('animate');
// 	}

// 	public function showLogin()
// 	{
// 		return View::make('login');
// 	}

// 	public function doLogin()
// 	{
// 		$email = Input::get('email');
// 		$password = Input::get('password');

// 		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
//     		return Redirect::action('PostsController@index');
// 		} else {
//     		Session::flash('errorMessage', 'Login Failed');
// 			// Log::info('Validator failed', Input::get('email'));
			
// 			return Redirect::action('HomeController@showLogin');
// 		}
// 	}

// 	public function doLogout()
// 	{
// 		Auth::logout();
// 		Session::flash('successMessage', 'Logged Out Successfully');
// 		return Redirect::action('PostsController@index');
// 	}
}


