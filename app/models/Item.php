<?php

class Item extends \Eloquent {
	protected $fillable = [];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'items';

	/**
	 * database relationship
	 * @return [type] [description]
	 */
	public function menu()
    {
        return $this->belongsTo('Menu');
    }

    /**
     * One-to_many one Item: many sizes
     * @return [type] [description]
     */
   	public function size()
    {
        return $this->hasMany('Size');
    }

    /**
     * One-to-One Rating to item rating system
     * @return [type] [description]
     */
    public function rating()
    {
        return $this->hasOne('Rating');
    }


     /**
     * One-to-One Rating to item category 
     * @return [type] [description]
     */
    public function category()
    {
        return $this->hasOne('Category');
    }

    /**
     * This function retireves the entire menu from the database
     * @return [type] [description]
     */
    public function scopeGetMenu($id){

    	$menu = DB::table('items')
            ->join('category', 'items.category_id', '=', 'category.id')
            ->join('ratings', 'items.ratings_id', '=', 'ratings.id')
            ->join('size', 'size.items_id', '=', 'items.id')
           // ->join('menu', 'items.menus_id', '=', 'menus.id')
            ->select('items.id', 
            	'items.title',
            	'items.description', 
            	'category.category', 
            	'ratings.rating',
            	DB::raw('GROUP_CONCAT(CONCAT(\'{size:\', size.size_title,\', price:\',size.price, \'}\') ORDER BY size.price SEPARATOR \',\') as sizes')
            	)
            ->groupBy('items.id')
            ->get();

            return $menu;


    }

    public function scopeGetRatingID($query, $item_id){

    	return $query->select('ratings_id')->where('id', '=', $item_id);
    }

}