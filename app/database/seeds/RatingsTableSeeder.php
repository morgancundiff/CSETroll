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
                        array(
                                        "id" => 22,
                                        "items_id" => 22,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 23,
                                        "items_id" => 23,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 24,
                                        "items_id" => 24,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 25,
                                        "items_id" => 25,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                         array(
                                        "id" => 26,
                                        "items_id" => 26,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 27,
                                        "items_id" => 27,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 28,
                                        "items_id" => 28,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 29,
                                        "items_id" => 29,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 30,
                                        "items_id" => 30,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 31,
                                        "items_id" => 31,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 32,
                                        "items_id" => 32,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 33,
                                        "items_id" => 33,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 34,
                                        "items_id" => 34,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 35,
                                        "items_id" => 35,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 36,
                                        "items_id" => 36,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 37,
                                        "items_id" => 37,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 38,
                                        "items_id" => 38,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 39,
                                        "items_id" => 39,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 40,
                                        "items_id" => 40,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 41,
                                        "items_id" => 41,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 42,
                                        "items_id" => 42,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 43,
                                        "items_id" => 43,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                         array(
                                        "id" => 44,
                                        "items_id" => 44,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 45,
                                        "items_id" => 45,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                        array(
                                        "id" => 46,
                                        "items_id" => 46,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 47,
                                        "items_id" => 47,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 48,
                                        "items_id" => 48,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 49,
                                        "items_id" => 49,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 50,
                                        "items_id" => 50,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 51,
                                        "items_id" => 51,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 52,
                                        "items_id" => 52,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 53,
                                        "items_id" => 53,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 54,
                                        "items_id" => 54,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 55,
                                        "items_id" => 55,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 56,
                                        "items_id" => 56,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                        array(
                                        "id" => 57,
                                        "items_id" => 57,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 58,
                                        "items_id" => 58,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 59,
                                        "items_id" => 59,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 60,
                                        "items_id" => 60,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 61,
                                        "items_id" => 61,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 62,
                                        "items_id" => 62,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 63,
                                        "items_id" => 63,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 64,
                                        "items_id" => 64,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 65,
                                        "items_id" => 65,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 66,
                                        "items_id" => 66,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 67,
                                        "items_id" => 67,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                         array(
                                        "id" => 68,
                                        "items_id" => 68,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                               
                        array(
                                        "id" => 69,
                                        "items_id" => 69,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 70,
                                        "items_id" => 70,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 71,
                                        "items_id" => 71,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 72,
                                        "items_id" => 72,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                         array(
                                        "id" => 73,
                                        "items_id" => 73,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 74,
                                        "items_id" => 74,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 75,
                                        "items_id" => 75,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 76,
                                        "items_id" => 76,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 77,
                                        "items_id" => 77,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 78,
                                        "items_id" => 78,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 79,
                                        "items_id" => 79,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 80,
                                        "items_id" => 80,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 81,
                                        "items_id" => 81,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 82,
                                        "items_id" => 82,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 83,
                                        "items_id" => 83,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 84,
                                        "items_id" => 84,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 85,
                                        "items_id" => 85,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 86,
                                        "items_id" => 86,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 87,
                                        "items_id" => 87,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 88,
                                        "items_id" => 88,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 89,
                                        "items_id" => 89,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 90,
                                        "items_id" => 90,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 91,
                                        "items_id" => 91,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 92,
                                        "items_id" => 92,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                        array(
                                        "id" => 93,
                                        "items_id" => 93,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 94,
                                        "items_id" => 94,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 95,
                                        "items_id" => 95,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 96,
                                        "items_id" => 96,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                        array(
                                        "id" => 97,
                                        "items_id" => 97,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 98,
                                        "items_id" => 98,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 99,
                                        "items_id" => 99,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 100,
                                        "items_id" => 100,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 101,
                                        "items_id" => 101,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 102,
                                        "items_id" => 102,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 103,
                                        "items_id" => 103,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 104,
                                        "items_id" => 104,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 105,
                                        "items_id" => 105,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 106,
                                        "items_id" => 106,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 107,
                                        "items_id" => 107,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 108,
                                        "items_id" => 108,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 109,
                                        "items_id" => 109,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 110,
                                        "items_id" => 110,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 111,
                                        "items_id" => 111,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 112,
                                        "items_id" => 112,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 113,
                                        "items_id" => 113,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 114,
                                        "items_id" => 114,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 115,
                                        "items_id" => 115,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 116,
                                        "items_id" => 116,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 117,
                                        "items_id" => 117,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 118,
                                        "items_id" => 118,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 119,
                                        "items_id" => 119,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 120,
                                        "items_id" => 120,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),                                
                        array(
                                        "id" => 121,
                                        "items_id" => 121,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 122,
                                        "items_id" => 122,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 123,
                                        "items_id" => 123,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 124,
                                        "items_id" => 124,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 125,
                                        "items_id" => 125,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 126,
                                        "items_id" => 126,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 127,
                                        "items_id" => 127,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 128,
                                        "items_id" => 128,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 129,
                                        "items_id" => 129,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 130,
                                        "items_id" => 130,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 131,
                                        "items_id" => 131,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 132,
                                        "items_id" => 132,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 133,
                                        "items_id" => 133,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 134,
                                        "items_id" => 134,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 135,
                                        "items_id" => 135,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 136,
                                        "items_id" => 136,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 137,
                                        "items_id" => 137,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 138,
                                        "items_id" => 138,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 139,
                                        "items_id" => 139,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 140,
                                        "items_id" => 140,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 141,
                                        "items_id" => 141,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 142,
                                        "items_id" => 142,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 143,
                                        "items_id" => 143,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 144,
                                        "items_id" => 144,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 145,
                                        "items_id" => 145,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 146,
                                        "items_id" => 146,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 147,
                                        "items_id" => 147,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 148,
                                        "items_id" => 148,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 149,
                                        "items_id" => 149,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 150,
                                        "items_id" => 150,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 151,
                                        "items_id" => 151,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 152,
                                        "items_id" => 152,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
                        array(
                                        "id" => 153,
                                        "items_id" => 153,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ), 
                        array(
                                        "id" => 154,
                                        "items_id" => 154,
                                        "total_votes" => 0,
                                        "rating" => 0
                                ),
               ));
	}

}
