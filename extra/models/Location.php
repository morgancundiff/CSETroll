<?php

class Location extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';
	public $timestamps = false;

	protected $fillable = [];

	/**
	 * return all the locations in database
	 * @return [type] [description]
	 */
	public  function scopeGetAllLocations(){

		$locations = DB::table('locations')->get();
		
		return $locations;
	}

	private function getLocationMenu($location_id){

	}

	public function scopeGetSingleLocation($query, $location_id){

		$locations = $query->where('id', '=', $location_id);
		
		return $locations;

	}

	public static function getNearestLocation($args){

		return array("some shit in here" => $args);
	}
}