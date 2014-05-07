<?php

class FactsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

				$fact = Fact::getFact();

				return Response::json($fact);

			}
	}

}