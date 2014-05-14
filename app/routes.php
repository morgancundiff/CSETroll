<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Pattern description*/
Route::pattern('location_id', '[0-9]+');
Route::pattern('menu_id', '[0-9]+');
Route::pattern('menu_item', '[0-9]+');
Route::pattern('id', '\d+');
Route::pattern('hash', '[a-z0-9]+');
Route::pattern('hex', '[a-f0-9]+');
Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
Route::pattern('base', '[a-zA-Z0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('username', '[a-z0-9_-]{3,16}');

Route::get('/', function()
{
	return Response::json(Lang::get('api.main.bad_call')); //done
});


/*
|--------------------------------------------------------------------------
| User Base Application API Routines
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the login aspect 
| of the application
|
*/

Route::any('/user/check/{username}', 'UserController@checkUsername'); //done

Route::any('/user/login/check', 'UserController@checkIfLoggedIn'); //done

Route::any('/user/login', 'UserController@loginMobile'); //done - includes favorites

Route::any('/user/create', 'UserController@createMobileUser'); //done

Route::any('/user/update', 'UserController@updateMobileUser'); //done

Route::any('/user/delete', 'UserController@deleteMobileUser'); //done

Route::any('/user/create/favorites/{item_id}', 'FavoritesController@createUserFavorites'); //done

Route::any('/user/delete/favorites/{favorite_id}', 'FavoritesController@deleteUserFavorites'); //done

//Route::any('/user/favorites', 'UserController@logInUser');

Route::any('/user/recover', 'UserController@resetPassword');

//Route::any('/user/login', 'UserController@loginUser');


/*
|--------------------------------------------------------------------------
| Facts Base Application API Routines
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the random facts  
| of the application
|
*/

Route::any('/get/fact', 'FactsController@index'); //done

/*
|--------------------------------------------------------------------------
| Location Base Application API Routines
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the location aspect  
| of the application
|
*/

Route::any('/get/locations', 'LocationsController@getAllLocations'); //done


Route::any('/get/locations/{location_id}', 'LocationsController@getSingleLocation'); //done

Route::any('/get/locations/nearest', 'LocationsController@getNearestLocation'); //done



/*
|--------------------------------------------------------------------------
| Menu Base Application API Routines
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the location aspect  
| of the application
|
*/

Route::any('/get/menu/{menu_id}', 'MenusController@getSingleMenu'); //done

Route::any('/ratings/{item_id}/{rating}', 'RatingsController@addRating'); //done - error checking needed

Route::any('/menu/{menu_id}', 'MenusController@getMenu'); //done - need error checking









