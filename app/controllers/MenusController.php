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
					$menu = Menu::getMenu($menu_id, 'items.id', 'asc')->get();

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json(array("menu" => $menu->toArray()));

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

	}

	/**
	 * this function return the menu for a specific id
	 * ordered by price
	 * @param  [type] $menu_id [description]
	 * @return [type]          [description]
	 */
	public function getSingleMenuByPrice($menu_id, $orderingBy){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					//get the menu for the specific id
					$menu = Menu::getMenu($menu_id, 'size.price', $orderingBy)->get();

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json(array("menu" => $menu->toArray()));

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

	}

	/**
	 * this function return the menu for a specific id
	 * ordered by title
	 * @param  [type] $menu_id [description]
	 * @return [type]          [description]
	 */
	public function getSingleMenuByTitle($menu_id, $orderingBy){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					//get the menu for the specific id
					$menu = Menu::getMenu($menu_id, 'items.title', $orderingBy)->get();

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json(array("menu" => $menu->toArray()));

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

	}


	/**
	 * this function return the menu for a specific id
	 * ordered by category
	 * @param  [type] $menu_id [description]
	 * @return [type]          [description]
	 */
	public function getSingleMenuByCategory($menu_id, $ordering){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					//get the menu for the specific id
					$menu = Menu::getMenu($menu_id, 'category.category',$ordering)->get();

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json(array("menu" => $menu->toArray()));

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

	}


	/**
	 * this function return the menu for a specific id
	 * ordered by rating
	 * @param  [type] $menu_id [description]
	 * @return [type]          [description]
	 */
	public function getSingleMenuByRating($menu_id){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

					//get the menu for the specific id
					$menu = Menu::getMenu($menu_id, 'ratings.rating', 'desc')->get();

					if($menu){


					//do error check if you ask for something that is not there
					return Response::json(array("menu" => $menu->toArray()));

				}else{

					return Response::json(Lang::get('api.menu.error.invalid_id'));

				}
			}

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