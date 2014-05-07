<?php

class UserController extends \BaseController {

	protected static $loginAttribute = 'username';

	//public $api_key = ;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Checks if a specific username is available
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function checkUsername($username)
	{
		
		return User::checkUsername($username);

	}

	/**
	 * Checks if the user is logged in
	 */
	
	public function checkIfLoggedIn()
	{

		$args = Input::all();
		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else if(! Input::has('user_token')){
			return Response::json(Lang::get('api.user.error.unknown_token'));
		}
		else{

			return User::checkIfLoggedIn();
		}
	}

	/**
	 * This function sends the reset password code to the user
	 */

	public function resetPassword(){

		$args = Input::all();
		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else{

			try
			{

				//sanitize data first to prevent hacks
				$username = e(Input::get('username'));


				// Find the user using the user email address
				$user = Sentry::findUserByLogin($username);

				// Get the password reset code
				$resetCode = $user->getResetPasswordCode();

				// Now you can send this code to your user via email for example.
				Mail::send('emails.auth.reminder', array(), function($message) {
    			$message->to('shalomabitan@gmail.com', 'Shalom Abitan')->subject('Password Recovery');
				});
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				//no such user, it is a bad request
				return Response::json(Lang::get('api.user.error.bad_request'));
			}

		}
	}


	/**
	 * Logs a user in
	 */
	
	public function getLoginForMobileUser()
	{

		$args = Input::all();
		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else{

			return User::getLoginForMobileUser();

		}

	}

	/**
	 * Create a Mobile App User
	 */
	
	public function createMobileUser()
	{


			$args = Input::all();

			if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else if (!Input::has('email')){
				
				return Response::json(Lang::get('api.user.error.email'));
			
			}else{

					return User::createMobileUser();

		}//end else


	}//createMobileUser


	public function updateMobileUser()
	{


			$args = Input::all();

			if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else if (!Input::has('email')){
				
				return Response::json(Lang::get('api.user.error.email'));
			
			}else{
    					
					return User::updateMobileUser();

		}//end else


	}//updateMobileUser


	public function updateFavorites()
	{


			$args = Input::all();

			if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					return User::updateUserFavorites();		

		}//end else


	}//createMobileUser


}