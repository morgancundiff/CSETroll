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
Route::pattern('id', '\d+');
Route::pattern('hash', '[a-z0-9]+');
Route::pattern('hex', '[a-f0-9]+');
Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
Route::pattern('base', '[a-zA-Z0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('username', '[a-z0-9_-]{3,16}');

Route::get('/', function()
{
	return View::make('hello');
});



Route::get('/joel', function()
{
	return View::make('goodbye');
});


Route::get('/get/locations', 'LocationsController@getAllLocations');

//Route::get('/get/locations/{single_location}', 'HomeController@goodbye');

/*
|--------------------------------------------------------------------------
| User Base Application API Routines
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the login aspect 
| of the application
|
*/

Route::any('/user/check/{username}', 'UserController@checkUsername');

Route::any('/user/login/check', 'UserController@checkIfLoggedIn');

Route::any('/user/login', 'UserController@loginMobile');

Route::any('/user/create', 'UserController@createMobileUser');

Route::any('/user/update', 'UserController@updateMobileUser');

Route::any('/user/delete', 'UserController@deleteMobileUser');

Route::any('/user/create/favorites', 'FavoritesController@logInUser');

Route::any('/user/update/favorites', 'UserController@scopeLoginMobile');

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

Route::any('/get/fact', 'FactsController@index');

/*
|--------------------------------------------------------------------------
| Location Base Application API Routines
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the location aspect  
| of the application
|
*/

Route::any('/get/locations', 'LocationsController@getAllLocations');


Route::any('/get/locations/{location_id}', 'LocationsController@getSingleLocation');

Route::any('/get/locations/nearest', 'LocationsController@getNearestLocation');







