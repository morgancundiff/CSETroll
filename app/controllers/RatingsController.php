<?php

class RatingsController extends \BaseController {

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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	public function addRating($menu_id, $rating){

		if ( ! Input::has('api_key') || (Input::get('api_key') !== Config::get('app.internalApiKey'))){
			//this checks that an API KEY is passed and valid
			return Response::json(Lang::get('api.user.error.unknown_api'));

		}else{

				//get the menu for the specific id
				$rating = Rating::setRating($menu_id, $rating);

				if($rating){


				//do error check if you ask for something that is not there

				return Response::json(Lang::get('api.rating.valid.success'));

			}else{

				return Response::json(Lang::get('api.rating.error.fail'));

			}
		}

	}

}