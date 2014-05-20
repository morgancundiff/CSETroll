<?php

class UserController extends \BaseController {

	protected static $loginAttribute = 'username';

	/**
	 * Checks if a specific username is available
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function checkUsername()
	{
	

		
		$return = User::checkUsername();

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

	public function recoverPassword(){

		return User::recoverPassword();
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


}