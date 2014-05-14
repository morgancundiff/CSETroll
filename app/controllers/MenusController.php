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

	/**
	 * this function return the menu for a specific id
	 * @param  [type] $menu_id [description]
	 * @return [type]          [description]
	 */
	public function getSingleMenu($menu_id){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					//get the menu for the specific id
					$menu = Menu::getMenu($menu_id)->get();

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json($menu->toArray());

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

	}


	public function addRating(){


		$menu = Menu::addRating();

		//var_dump($menu_id);
		return "hello";

		//return Response::json(array("menu_id" => $menu_id, "menu_item" =>$menu_item, "rating" => $rating));
	}

		/**
		 * get specific menu
		 * @param  [type] $menu_id [description]
		 * @return [type]          [description]
		 */
	
	public function getMenu($menu_id){

			//make call to the menu model to get specific menu
			$menu = Menu::getMenu($menu_id)->get();

			if($menu){
            return Response::json($menu->toArray());
        	}else{
        		return Response::json(Lang::get('api.menu.error.invalid_id'));
        	}
	}

}