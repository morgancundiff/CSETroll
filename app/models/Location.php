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

	public function scopeGetSingleLocation($query, $location_id){

		try
		{
		 	$location = Location::findOrFail($location_id);

		 	//return $location['menus_id'];
		 	$menu = Menu::getMenu($location['menus_id'])->get();

		 	return Response::json(
		 		array(
		 			"location" => $location->toArray(),
		 			"menu" => $menu->toArray()
		 			)
		 		);
		}
		
		catch (Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
			return Response::json(Lang::get('api.location.error.invalid_id'));
		}


	}

	public static function scopeGetNearestLocation($query, $lat, $lng){

		//$lat = 37 ;
		//$lng = -122;

		$radius = 25;

		$haversine = '( 3959 * acos( cos( radians('. $lat .') ) * cos( radians( lat ) ) * cos( radians( lng ) - radians('.$lng.') ) + sin( radians('. $lat .') ) * sin( radians( lat ) ) ) )';
		
		$nearestQuery = $query ->select(array('id', DB::raw($haversine . ' as distance') , 'lat', 'lng'))
		->orderBy('distance', 'asc')
		->having('distance', '<', $radius);

		return $nearestQuery;
	}
}