<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RatingsTableSeeder extends Seeder {

	public function run()
	{

		//$table->increments('id');
		// $table->integer('items_id');
		// $table->integer('total_votes');
		// $table->integer('rating');
		

		DB::table('ratings')->delete();
		   
        DB::table('ratings')->insert(
                array(

                	//menu item one
                        array(
                                        "id" => 1,
                                        "items_id" => 1,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 2,
                                        "items_id" => 2,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 3,
                                        "items_id" => 3,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),
                                        	//menu item one
                        array(
                                        "id" => 4,
                                        "items_id" => 4,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 5,
                                        "items_id" => 5,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 6,
                                        "items_id" => 6,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),
                                        	//menu item one
                        array(
                                        "id" => 7,
                                        "items_id" => 7,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 8,
                                        "items_id" => 8,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 9,
                                        "items_id" => 9,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),
                                        	//menu item one
                        array(
                                        "id" => 10,
                                        "items_id" => 10,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 11,
                                        "items_id" => 11,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 12,
                                        "items_id" => 12,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),
                                        	//menu item one
                        array(
                                        "id" => 13,
                                        "items_id" => 13,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 14,
                                        "items_id" => 14,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 15,
                                        "items_id" => 15,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),
                                        	//menu item one
                        array(
                                        "id" => 16,
                                        "items_id" => 16,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 17,
                                        "items_id" => 17,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 18,
                                        "items_id" => 18,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),
                                        	//menu item one
                        array(
                                        "id" => 19,
                                        "items_id" => 19,
                                        "total_votes" => 20,
                                        "rating" => 3.5
                                ),
                        //menu item two
                        array(
                                        "id" => 20,
                                        "items_id" => 20,
                                        "total_votes" => 65,
                                        "rating" => 4.5
                                ),
                        array(
                                        "id" => 21,
                                        "items_id" => 21,
                                        "total_votes" => 82,
                                        "rating" => 3.67
                                ),

                ));



	}

}