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

				$location = Location::getAllLocations();

				return Response::json($location);

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

				$location = Location::getSingleLocation($location_id)->get();

				return Response::json($location);

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
		$location = Location::getNearestLocation($location_id);

		return Response::json($location);
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