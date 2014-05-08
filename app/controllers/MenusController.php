<?php

class MenusController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function getSingleMenu($menu_id){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					//get the menu for the specific id
					$menu = Menu::find($menu_id);

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json($menu->toArray());

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

	}

}