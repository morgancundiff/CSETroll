<?php

class Fact extends \Eloquent {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'facts';

	/**
	 * get a random fact from the database
	 * @return object
	 */
	public function scopeGetFact(){
		
		return Fact::orderBy(DB::raw('RAND()'))->first();
	}
}