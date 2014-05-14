<?php

class Favorite extends \Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'favorites';

	protected $fillable = [];

	protected $guarded = array();

	public $timestamps = false;



	public function user()
    {
        return $this->belongsTo('User');
    }

   	public function item()
    {
        return $this->hasMany('Item');
    }


	/**
	 * Get the user's favorites.
	 *
	 * @return array
	 */
	public function scopeGetUserFavorites($query, $user)
	{
				$favorite =  $query
				->select('favorites.id','favorites.items_id','items.title','favorites.users_id', 'items.menus_id')
				->join('items', 'favorites.items_id', '=', 'items.id')
				->where('favorites.users_id', '=', $user);

					return $favorite;
/* This is the general database call
SELECT 
favorites.id,
favorites.items_id,
items.title,
favorites.users_id
FROM favorites
INNER JOIN items
ON favorites.items_id = items.id
WHERE favorites.users_id = 95
*/

	}

	/**
	 * Create the user's favorites. This will add a new entry into the 
	 * table
	 *
	 * @return array
	 */
	public function scopeCreateUserFavorites($query, $username, $item_id)
	{
				// "id" => 1,
				// "users_id" => 1,
				// "items_id" => 1,
				// "menus_id" => 1
		 
		 //get the user
		try
		{
		 	$user = Sentry::findUserByLogin($username);
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Response::json(Lang::get('api.user.error.bad_request'));
		}

		 $menus_id = Item::find($item_id)->first();

		 //make sure he cannot add duplicates
		 $favorite = Favorite::firstOrCreate(array('users_id' => $user->id, 'items_id' => $item_id, 'menus_id' => $menus_id['menus_id']));

		 return Response::json(
		 	array(
		 		"response" => Lang::get('api.favorite.valid.success'),
		 		"favorite" => $favorite->toArray())
		 	);

	}


	/**
	 * Delete the user's favorites. This will add a delete entry from the 
	 * table
	 *
	 * @return array
	 */
	public function scopeDeleteUserFavorites($query, $username, $favorite_id)
	{
				// "id" => 1,
				// "users_id" => 1,
				// "items_id" => 1,
				// "menus_id" => 1
		 
		 //get the user should check if there is
		 
		try
		{
		 	$user = Sentry::findUserByLogin($username);
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Response::json(Lang::get('api.user.error.bad_request'));
		}


		 try
		{
			
			$favorite = Favorite::findOrFail($favorite_id);

			//only delete if the user has permission to delete
			if($favorite['users_id'] == $user->id){
				$favorite->delete();
		 		return Response::json(Lang::get('api.favorite.valid.delete'));
		 	}else{//trying to delete favorite not belonging to current user
		 		return Response::json(Lang::get('api.user.error.bad_request'));
		 	}

		}
		//trying to delete non-existing favorite
		catch(Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
		   return Response::json(Lang::get('api.user.error.bad_request'));
		}
		 

		 return $favorite;
		 if(1){

		 	
		 }

		// }catch(\ErrorException $e){
		// 	return Response::json(Lang::get('api.user.error.bad_request'));
		// }

		 return $favorite;

	}





}