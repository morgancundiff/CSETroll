<?php

class UserController extends \BaseController {

	protected static $loginAttribute = 'username';

	/**
	 * Checks if a specific username is available
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function checkUsername($username)
	{
	

		
		$return = User::checkUsername($username);

		return $return;
		//$user->scopeCheckUsername($username);

	}

	/**
	 * Checks if the user is logged in
	 */
	
	public function checkIfLoggedIn()
	{

		return User::checkUserLogin();
	}

	/**
	 * This function sends the reset password code to the user
	 */

	public function resetPassword(){

		return User::resetPassword();
	}


	/**
	 * Logs a user in
	 */
	
	public function loginMobile()
	{
		return User::loginMobile();
	}

	/**
	 * Create a Mobile App User
	 */
	
	public function createMobileUser()
	{
		return User::createMobileUser();
	}//createMobileUser


	public function updateMobileUser()
	{
		return User::updateMobileUser();

	}//updateMobileUser


	public function deleteMobileUser() {
		
		return User::deleteMobileUser();

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

		}//end else


	}//createMobileUser


}