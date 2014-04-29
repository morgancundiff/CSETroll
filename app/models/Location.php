<?php

class Location extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

	protected $fillable = [];

	/**
	 * return all the locations in database
	 * @return [type] [description]
	 */
	public  function scopeGetAllLocations(){

		return array("some shit in here");
	}

	private function getLocationMenu($location_id){

	}

	public function scopeGetSingleLocation($location_id){

		return array("some shit in here" => $location_id);

	}

	public static function getNearestLocation($args){

		return array("some shit in here" => $args);
	}
}