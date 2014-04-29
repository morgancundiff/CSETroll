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
		try
		{
			$user = Sentry::findUserByLogin($username);

			return Response::json(Lang::get('api.user.error.username_exists'));
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Response::json(Lang::get('api.user.valid.valid_username'));
		}

	}

	/**
	 * Checks if the user is logged in
	 */
	
	public function checkIfLoggedIn()
	{
		return Response::json(Sentry::check());
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
	
	public function logInUser()
	{

		$args = Input::all();
		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else{

			try
			{

				//sanitize data first to prevent hacks
				$username = e(Input::get('username'));
				$password = e(Input::get('password'));

    			// Set login credentials
				$credentials = array(
					'username'  => $username,
					'password' 	=> $password,
					);

    			// Try to authenticate the user
				$user = Sentry::authenticate($credentials, false);
				$user = Sentry::getUser();

				$favorites = User::getUserFavorites($user);

				$responseArray = array(
					"response"	=> array(
							"result"	=> "success",
							"user"		=> $user->toArray(),
							"favorites" => $favorites			
						)
					);

				return Response::json($responseArray);


			}
			catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
			{
				return Response::json(Lang::get('api.user.error.username'));
			}
			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
			{
				return Response::json(Lang::get('api.user.error.password'));
			}
			catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
			{
				return Response::json(Lang::get('api.user.error.bad_request'));
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				return Response::json(Lang::get('api.user.error.bad_request'));
			}
			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
			{
				echo 'User is not activated.';
			}

			// The following is only required if throttle is enabled
			catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
			{
				echo 'User is suspended.';
			}
			catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
			{
				echo 'User is banned.';
			}


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

					try {


						//sanitize data first to prevent hacks
						$username = e(Input::get('username'));
						$password = e(Input::get('password'));
						$email = e(Input::get('email'));
    					
    					// Create the user
						$user = Sentry::createUser(array(
							'email' 	=> $email,
							'username'  => $username,
							'password'  => $password,
							'activated' => true,
							));

							try {
								$group = Sentry::findGroupByName('Users');

								// Assign the group to the user
								$user->addGroup($group);

								//do we log them in?
								return Response::json(array_add(Lang::get('api.user.valid.created_user'), 'user', $user));

							}
							catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e){

								return Response::json(Lang::get('api.user.error.internal_error'));

							}
    					
					}
					catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
					{
						return Response::json(Lang::get('api.user.error.username'));
					}
					catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
					{
						return Response::json(Lang::get('api.user.error.bad_request'));
					}
					catch (Cartalyst\Sentry\Users\UserExistsException $e)
					{
						return Response::json(Lang::get('api.user.error.username_exists'));
					}
					catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
					{
						return Response::json(Lang::get('api.user.error.internal_error')); 
					}			

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
    					
					try{

						//sanitize data first to prevent hacks
						$username = e(Input::get('username'));
						$email = e(Input::get('email'));
						
						// Find the user using the user id
						//$user = Sentry::findUserByLogin($username);

						// Update the user details
						// only if there does not exist another emsil in our datbase
						// like it
						$emptyModelInstance = Sentry::getUserProvider()->getEmptyUser();
						// Now, you have any methods available that you'd like. Retrieve a new instance, query
						// against anything. Because our User model implements the right interfaces, it plays nicely
						// with Sentry.
						$myUser = $emptyModelInstance->where('email', '=', $email)->first();

						$user = Sentry::findUserByLogin($username);
						
						if($myUser){

							return Response::json(Lang::get('api.user.error.email_exists'));
						}
						else{

							//update
							$user->email = $email;
						}


						if(Input::has('first_name'))
							$user->first_name = e(Input::get('first_name'));

						if(Input::has('last_name'))
							$user->last_name = e(Input::get('last_name'));

						// Update the user
						if ($user->save())
						{
		    				// User information was updated
		    				return Response::json(Lang::get('api.user.valid.updated_user'));

						}
						else
						{
		   					 // User information was not updated
							return Response::json(Lang::get('api.user.error.updated_user'));

						}
					}
					catch (Cartalyst\Sentry\Users\UserExistsException $e)
					{
						return Response::json(Lang::get('api.user.error.bad_request'));

					}
					catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
					{
						return Response::json(Lang::get('api.user.error.bad_request'));

					}

		}//end else


	}//updateMobileUser


	public function updateFavorites()
	{


			$args = Input::all();

			if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					try {


						//sanitize data first to prevent hacks
						$username = e(Input::get('username'));
						$favorites = e(Input::get('favorites'));
    					
    					// Create the user
						$user = Sentry::createUser(array(
							'email' 	=> $email,
							'username'  => $username,
							'password'  => $password,
							'activated' => true,
							));

							try {
								$group = Sentry::findGroupByName('Users');

								// Assign the group to the user
								$user->addGroup($group);

								//do we log them in?
								return Response::json(array_add(Lang::get('api.user.valid.created_user'), 'user', $user));

							}
							catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e){

								return Response::json(Lang::get('api.user.error.internal_error'));

							}
    					
					}
					catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
					{
						return Response::json(Lang::get('api.user.error.username'));
					}
					catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
					{
						return Response::json(Lang::get('api.user.error.bad_request'));
					}
					catch (Cartalyst\Sentry\Users\UserExistsException $e)
					{
						return Response::json(Lang::get('api.user.error.username_exists'));
					}
					catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
					{
						return Response::json(Lang::get('api.user.error.internal_error')); 
					}			

		}//end else


	}//createMobileUser


}