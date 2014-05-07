<?php

class Favorite extends \Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'favorites';

	protected $fillable = [];



	public function user()
    {
        return $this->belongsTo('User');
    }
	/**
	 * Get the user's favorites.
	 *
	 * @return array
	 */
	public function scopeGetUserFavorites($user)
	{
		return array("this works"); 
	}

	/**
	 * Create the user's favorites.
	 *
	 * @return array
	 */
	public function scopeCreateUserFavorites($user)
	{
		return array("this works"); 
	}

	/**
	 * Update the user's favorites.
	 *
	 * @return array
	 */
	public function scopeUpdateUserFavorites($user)
	{
		return array("this works"); 
	}

}