<?php

class FavoritesController extends \BaseController {

	/**
	 * create new favorite
	 */
	public function createUserFavorites($item_id)
	{

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else if(! Input::has('username')){

			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.username'));

		}
		else{

			$username = e(Input::get('username'));

			return Favorite::createUserFavorites($username, $item_id);
		}
	}



	/**
	 * delete new favorite
	 */
	public function deleteUserFavorites($favorite_id)
	{

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else if(! Input::has('username')){

			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.username'));

		}
		else{

			$username = e(Input::get('username'));

			return Favorite::deleteUserFavorites($username, $favorite_id);
		}
	}

}