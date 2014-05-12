<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	'main' => array(
		'bad_call'				=> array("response" => array("result" => "fail")),
		),
	'user' => array(
		'error' => array(
			'bad_request'		=> array("response" => array("result" => "fail")),
			'unknown_api'		=> array("response" => array("result" => "fail", "message" => "unknown API KEY")),
			'password'			=> array("response" => array("result" => "fail", "message" => "must provide password")),
			'email'				=> array("response" => array("result" => "fail", "message" => "must provide email")),
			'username'			=> array("response" => array("result" => "fail", "message" => "must provide username")),
			'username_exists'	=> array("response" => array("result" => "fail", "message" => "Username unavailable")),
			'internal_error' 	=> array("response" => array("result" => "fail", "message" => "something went wrong")),
			'updated_user' 		=> array("response" => array("result" => "fail", "message" => "user not updated successfuly")),
			'email_exists' 		=> array("response" => array("result" => "fail", "message" => "Cannot update, email is already in use")),
			'location_id' 		=> array("response" => array("result" => "fail", "message" => "Location Id is required")),
			'unknown_token' 	=> array("response" => array("result" => "fail", "message" => "Uknown user token")),
			'invalid_token' 	=> array("response" => array("result" => "fail", "message" => "Invalid user token")),
			'logged_out' 	=> array("response" => array("result" => "fail", "message" => "User is not logged in")),


			),
		'valid' => array(
			'valid_username'	=> array("response" => array("result" => "success", "message" => "Username available")),
			'created_user'		=> array("response" => array("result" => "success", "message" => "user created successfuly")),
			'updated_user'		=> array("response" => array("result" => "success", "message" => "user updated successfuly")),
			'user_delete'		=> array("response" => array("result" => "success", "message" => "user deleted successfuly")),
			),
	),
	'menu' => array(
		'error' => array(
			'invalid_id'		=>array("response" => array("result" => "fail", "message" => "unknown menu id")),
			
			),
		),

	'location' => array(
		'error' => array(
			'invalid_id'		=>array("response" => array("result" => "fail", "message" => "unknown location id")),
			
			),
		),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
