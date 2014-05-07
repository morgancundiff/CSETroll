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

	public function menu(){

        return $this->hasOne('Menu', 'menus_id');
    }
	/**
	 * return all the locations in database
	 * @return [type] [description]
	 */
	public  function scopeGetAllLocations(){

		$locations = DB::table('locations')->get();
		
		return $locations;
	}

	private function getLocationMenu($location_id){

		$location = Locations::all()->menu();

	}

	public function scopeGetSingleLocation($query, $location_id){

		$locations = $query->where('id', '=', $location_id);
		
		return $locations;

	}

	public static function getNearestLocation($args){

		$lat = 37;
		$lng = -122;
		$nearestQuery = 'SELECT id, ( 3959 * acos( cos( radians('. $lat .') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lng.') ) + sin( radians('. $lat .') ) * sin( radians( lat ) ) ) ) AS distance FROM locations HAVING distance < 25 ORDER BY distance LIMIT 0 , 20';


		return array("some shit in here" => $args);
	}
}