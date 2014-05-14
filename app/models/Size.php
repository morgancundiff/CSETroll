<?php

class Size extends \Eloquent {
	protected $fillable = [];

	public function item()
    {
        return $this->belongsTo('Item');
    }
}