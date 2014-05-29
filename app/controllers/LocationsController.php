<?php

class LocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Make a call to the Location Model 
	 * for getAllLocations()
	 *
	 * @return Response
	 */
	public function getAllLocations(){

			if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

				return Response::json(array("locations" => Location::getAllLocations()));

			}
	}

	/**
	 * Make call to Location Model
	 * to retirieve single location Id
	 *
	 * @return Response
	 */
	public function getSingleLocation($location_id)
	{
			if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
				//this checks that an API KEY is passed and valid
				return Response::json(Lang::get('api.user.error.unknown_api'));

			}else{

			return Location::getSingleLocation($location_id);

			}
	}


	/**
	 * Make call to Location Model
	 * to retirieve nearest location to a specific 
	 * geo coordinates
	 *
	 * @return Response
	 */
	public function getNearestLocation()
	{

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else if(! Input::has('lat')){
			return Response::json(Lang::get('api.location.error.invalid_lat'));
		}else if(! Input::has('lng')){
			return Response::json(Lang::get('api.location.error.invalid_lng'));
		}
		else{

				$lat = e(Input::get('lat'));
				$lng = e(Input::get('lng'));
			
				$nearest = Location::getNearestLocation($lat, $lng)->first();

				if($nearest)
					return $nearest;
				else
						return Response::json(array("result"=> "fail", "message" => "you are out of range from UCSD"));

			}


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

}