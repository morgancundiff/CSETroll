<?php

class Menu extends \Eloquent {
	
		/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'menus';
	public $timestamps = false;

	/**
	 * Database Relationship one-menu-to-many-items
	 * @return [type] [description]
	 */
	public function items()
    {
        return $this->hasMany('Item');
    }



	/**
	 * This function will get the menu for a specific menu id
	 * @param  [type] $menu_id [description]
	 * @return [type]          [description]
	 */
	public function scopeGetMenu($query, $menu_id, $ordering, $orderingBy){

			/*quite extensive datbase call*/

			//DB::table('menus')
			//
			//
		$menu = $query
            ->join('items', 'items.menus_id', '=', 'menus.id')
            ->join('category', 'items.category_id', '=', 'category.id')
            ->join('ratings', 'items.ratings_id', '=', 'ratings.id')
            ->join('size', 'size.items_id', '=', 'items.id')
            ->select('items.id', 
            	'items.title',
            	'items.description', 
            	'category.category', 
            	'ratings.rating',
            	'ratings.total_votes',
            	//DB::raw('GROUP_CONCAT(CONCAT(\'size:\', size.size_title,\',price:\',size.price, \'\') ORDER BY size.price SEPARATOR \',\') as sizes')
            	DB::raw('CONCAT("[",
GROUP_CONCAT(
CONCAT("{\"size\":\"",size.size_title,"\""),
CONCAT(",\"price\":\"",size.price),"\"}" ORDER BY size.price)
,"]") AS sizes')
            	)
            ->where('menus.id', '=', $menu_id)
            ->groupBy('items.id')
            ->orderBy($ordering, $orderingBy);


/*
SELECT items.id, 
items.title,items.description, 
category.category, 
ratings.rating,
GROUP_CONCAT(CONCAT(size.size_title,':',size.price) ORDER BY size.price SEPARATOR ',') as sizes
From menus
INNER JOIN items
ON items.menus_id = menus.id
INNER JOIN category
ON items.category_id = category.id
INNER JOIN ratings
ON items.ratings_id = ratings.id
INNER JOIN size
ON size.items_id = items.id
WHERE menus.id = 1
GROUP BY items.id
*/

			if(count($menu)){

            	return null;
            }else{
            	return $menu;
            }
	}

}