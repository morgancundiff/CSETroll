<?php

class Category extends \Eloquent {
	protected $fillable = [];

	/**
	 * database relationship
	 * @return [type] [description]
	 */
	public function item()
    {
        return $this->belongsTo('Item');
    }
}