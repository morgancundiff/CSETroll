<?php

class Menu extends \Eloquent {
	
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'menus';
	public $timestamps = false;

	public function scopeAddRating(){

		//get the menu id to check
		$menu_id = Request::segment(2);

		//get the item id to check
		$menu_item = Request::segment(3);
		//get the rating
		$rating = Request::segment(4);

		$menu = Menu::find($menu_id);

		$menu = $menu->toArray();

		$menuArray = json_decode($menu["menu"], true);

		$array = array_dot($menuArray);

		var_dump($menuArray);

		var_dump($array);
		
		return "hello";
	}

}