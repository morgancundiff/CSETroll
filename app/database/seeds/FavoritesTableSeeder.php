<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FavoritesTableSeeder extends Seeder {

	public function run()
	{
		
        // $table->increments('id');
        // $table->integer('users_id');
        // $table->integer('items_id');

        DB::table('favorites')->delete();
		   
        DB::table('favorites')->insert(
                array(
                        
                        array(
                                        "id" => 1,
                                        "users_id" => 1,
                                        "items_id" => 1,
                                        "menus_id" => 1
                                ),  
                        array(
                                        "id" => 2,
                                        "users_id" => 1,
                                        "items_id" => 2,
                                        "menus_id" => 1 
                                ), 
                        array(
                                        "id" => 3,
                                        "users_id" => 2,
                                        "items_id" => 2,
                                        "menus_id" => 1 
                                ),   
                ));
	}

}