<?php

class ItemsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getMenu($menu_id = 1){

		$menu_id = 1;
		$menu = Item::getMenu($menu_id);
    	
    	/*$menu = DB::table('items')
            ->join('category', 'items.category_id', '=', 'category.id')
            ->join('ratings', 'items.ratings_id', '=', 'ratings.id')
            ->join('size', 'size.items_id', '=', 'items.id')
            ->select('items.id', 
            	'items.title',
            	'items.description', 
            	'category.category', 
            	'ratings.rating',
            	DB::raw('GROUP_CONCAT(CONCAT(\'{size:\', size.size_title,\', price:\',size.price, \'}\') ORDER BY size.price SEPARATOR \',\') as sizes')
            	)
           // ->select()
           // ->select()
            ->groupBy('items.id')
            ->get();*/

            return Response::json($menu);


    }

}