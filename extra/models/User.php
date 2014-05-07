<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * this attribute is for the presist login code
	 * @var [string]
	 */
	protected $presist_code;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Get the user's favorites.
	 *
	 * @return array
	 */
	public function scopeGetUserFavorites($user)
	{
		return array("this works"); 
	}

	/**
	 * Create the user's favorites.
	 *
	 * @return array
	 */
	public function scopeCreateUserFavorites($user)
	{
		return array("this works"); 
	}

	/**
	 * Update the user's favorites.
	 *
	 * @return array
	 */
	public function scopeUpdateUserFavorites($user)
	{
		
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
	}

	/**
	 * [Get the presist code to make sure everything is valid
	 * @param  [string] $user [the username]
	 * @return [hashed string]       [the presist code]
	 */
	public function scopeGetPresistCode($query, $user){

		$model = $query->select('persist_code')->where('id', $user);

		return $model;

	}


	public function scopeCheckPresistCode($query, $user, $code){
 
		$model = $query->select('persist_code')->where('id', $user);

		return $model;

	}

	public function scopeCreateMobileUser(){

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
								return Response::json(array_add(Lang::get('api.user.valid.created_user'), 'user', $user->toArray()));

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

	}


	/**
	 * [scopeUpdateMobileUser]
	 * This function updates the user's information
	 * such as email, first, or last name
	 * @return [object] []
	 */
	public function scopeUpdateMobileUser(){

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

	}

	/**
	 * [scopeGetLoginForMobileUser description]
	 * @return [type] [description]
	 */
	public function scopeGetLoginForMobileUser(){

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
				$presist_code = User::getPresistCode($user->id)->first()->toArray();

				$presist_code = array_shift($presist_code);

				$favorites = User::getUserFavorites($user);

				$responseArray = array(
					"response"	=> array(
							"result"		=> "success",
							"user"			=> $user->toArray(),
							"favorites" 	=> $favorites,
							"presist_code" 	=> Crypt::encrypt($presist_code),

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

	/**
	 * [scopeCheckUsername description]
	 * @return [type] [description]
	 */
	public function scopeCheckUsername($username){

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


	public function scopeCheckIfLoggedIn(){

		try
			{

				//sanitize data first to prevent hacks
				$username = e(Input::get('username'));
				$user_token = e(Input::get('user_token'));

				$user = Sentry::findUserByLogin($username);

				$presist_code = User::checkPresistCode($user->id, $user_token)->first()->toArray();

				$presist_code = array_shift($presist_code);

				echo $presist_code."\n";

				echo $user_token."\n";

				$decyptedArray = Crypt::decrypt($user_token);

				//$unhashed = Crypt::decrypt($user_token);

				$unhashed = array_shift($decyptedArray);

				echo $unhashed;


				if($unhashed == $presist_code){

					$user = Sentry::login($user, false);
					$user = Sentry::getUser();
					$presist_code = User::getPresistCode($user->id)->first()->toArray();
					$favorites = User::getUserFavorites($user);

					$responseArray = array(
						"response"	=> array(
								"result"		=> "success",
								"user"			=> $user->toArray(),
								"favorites" 	=> $favorites,
								"presist_code" 	=> Crypt::encrypt($presist_code),

							)
						);
				
					return Response::json($responseArray);

				}else{
					
					return Response::json(Lang::get('api.user.error.logged_out'));

				}


			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
				return Response::json(Lang::get('api.user.error.bad_request'));
			}

			
	}

}
