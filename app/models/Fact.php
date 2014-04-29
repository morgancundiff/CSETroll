<?php

class Fact extends \Eloquent {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * get a random fact from the database
	 * @return array
	 */
	public function scopeGetFact(){
		
		return array("hello");
	}
}