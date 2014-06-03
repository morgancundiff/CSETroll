<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SizeTableSeeder extends Seeder {

	public function run()
	{
		

			// $table->increments('id');
			// $table->integer('items_id');
			// $table->string('size_title');
			// $table->integer('price');
			
		DB::table('size')->delete();
		   
        DB::table('size')->insert(
                array(
                	//menu item one
                        array(
                                        "id" => 1,
                                        "items_id" => 1,
                                        "size_title" => "small",
                                        "price" => 1.25
                                ),

                        array(
                                        "id" => 2,
                                        "items_id" => 1,
                                        "size_title" => "medium",
                                        "price" => 1.75
                                ),
                        
                        //menu item two
                      	array(
                                        "id" => 3,
                                        "items_id" => 2,
                                        "size_title" => "small",
                                        "price" => 1.50
                                ),

                        array(
                                        "id" => 4,
                                        "items_id" => 2,
                                        "size_title" => "medium",
                                        "price" => 1.70
                                ),
                        array(
                                        "id" => 5,
                                        "items_id" => 2,
                                        "size_title" => "large",
                                        "price" => 1.90
                                ),
                        //menu item three
                     	
                     	array(
                                        "id" => 6,
                                        "items_id" => 3,
                                        "size_title" => "small",
                                        "price" => 1.75
                                ),

                        array(
                                        "id" => 7,
                                        "items_id" => 3,
                                        "size_title" => "medium",
                                        "price" => 2.10
                                ),
                        array(
                                        "id" => 8,
                                        "items_id" => 3,
                                        "size_title" => "large",
                                        "price" => 2.40
                                ),
                        //menu item four
                        
                        array(
                                        "id" => 9,
                                        "items_id" => 4,
                                        "size_title" => "small",
                                        "price" => 2.00
                                ),

                        array(
                                        "id" => 10,
                                        "items_id" => 4,
                                        "size_title" => "medium",
                                        "price" => 2.30
                                ),
                        array(
                                        "id" => 11,
                                        "items_id" => 4,
                                        "size_title" => "large",
                                        "price" => 2.50
                                ),
                        //menu item five
                        
                        array(
                                        "id" => 12,
                                        "items_id" => 5,
                                        "size_title" => "small",
                                        "price" => 2.00
                                ),

                        array(
                                        "id" => 13,
                                        "items_id" => 5,
                                        "size_title" => "medium",
                                        "price" => 2.30
                                ),
                        array(
                                        "id" => 14,
                                        "items_id" => 5,
                                        "size_title" => "large",
                                        "price" => 2.50
                                ),
                        //menu item six
                        array(
                                        "id" => 15,
                                        "items_id" => 6,
                                        "size_title" => "small",
                                        "price" => 2.90
                                ),

                        array(
                                        "id" => 16,
                                        "items_id" => 6,
                                        "size_title" => "medium",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 17,
                                        "items_id" => 6,
                                        "size_title" => "large",
                                        "price" => 3.75
                                ),
                        //menu item seven
                        array(
                                        "id" => 18,
                                        "items_id" => 7,
                                        "size_title" => "small",
                                        "price" => 2.90
                                ),

                        array(
                                        "id" => 19,
                                        "items_id" => 7,
                                        "size_title" => "medium",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 20,
                                        "items_id" => 7,
                                        "size_title" => "large",
                                        "price" => 3.75
                                ),
                        //menu item four
                        //
                        array(
                                        "id" => 21,
                                        "items_id" => 8,
                                        "size_title" => "small",
                                        "price" => 3.25
                                ),

                        array(
                                        "id" => 22,
                                        "items_id" => 8,
                                        "size_title" => "medium",
                                        "price" => 3.70
                                ),
                        array(
                                        "id" => 23,
                                        "items_id" => 8,
                                        "size_title" => "large",
                                        "price" => 3.95
                                ),

                        array(
                                        "id" => 24,
                                        "items_id" => 9,
                                        "size_title" => "small",
                                        "price" => 3.35
                                ),

                        array(
                                        "id" => 25,
                                        "items_id" => 9,
                                        "size_title" => "medium",
                                        "price" => 3.95
                                ),
                        array(
                                        "id" => 26,
                                        "items_id" => 9,
                                        "size_title" => "large",
                                        "price" => 4.25
                                ),

                        array(
                                        "id" => 27,
                                        "items_id" => 10,
                                        "size_title" => "small",
                                        "price" => 3.35
                                ),

                        array(
                                        "id" => 28,
                                        "items_id" => 10,
                                        "size_title" => "medium",
                                        "price" => 3.95
                                ),
                        array(
                                        "id" => 29,
                                        "items_id" => 10,
                                        "size_title" => "large",
                                        "price" => 4.25
                                ),

                        array(
                                        "id" => 30,
                                        "items_id" => 11,
                                        "size_title" => "small",
                                        "price" => 3.25
                                ),

                        array(
                                        "id" => 31,
                                        "items_id" => 11,
                                        "size_title" => "medium",
                                        "price" => 3.80
                                ),
                        array(
                                        "id" => 32,
                                        "items_id" => 11,
                                        "size_title" => "large",
                                        "price" => 4.20
                                ),

                        array(
                                        "id" => 33,
                                        "items_id" => 12,
                                        "size_title" => "Any Size",
                                        "price" => 1.75
                                ),

                        array(
                                        "id" => 34,
                                        "items_id" => 13,
                                        "size_title" => "small",
                                        "price" => 2.35
                                ),

                        array(
                                        "id" => 35,
                                        "items_id" => 13,
                                        "size_title" => "medium",
                                        "price" => 2.65
                                ),
                        array(
                                        "id" => 36,
                                        "items_id" => 13,
                                        "size_title" => "large",
                                        "price" => 2.95
                                ),

                        array(
                                        "id" => 37,
                                        "items_id" => 14,
                                        "size_title" => "small",
                                        "price" => 2.35
                                ),

                        array(
                                        "id" => 38,
                                        "items_id" => 14,
                                        "size_title" => "medium",
                                        "price" => 2.65
                                ),
                        array(
                                        "id" => 39,
                                        "items_id" => 14,
                                        "size_title" => "large",
                                        "price" => 2.95
                                ),


                        array(
                                        "id" => 40,
                                        "items_id" => 15,
                                        "size_title" => "small",
                                        "price" => 3.25
                                ),

                        array(
                                        "id" => 41,
                                        "items_id" => 15,
                                        "size_title" => "medium",
                                        "price" => 3.70
                                ),
                        array(
                                        "id" => 42,
                                        "items_id" => 15,
                                        "size_title" => "large",
                                        "price" => 3.95
                                ),

                        array(
                                        "id" => 43,
                                        "items_id" => 16,
                                        "size_title" => "20 Oz Cup",
                                        "price" => 1.90
                                ),
                        array(
                                        "id" => 44,
                                        "items_id" => 17,
                                        "size_title" => "20 Oz Cup",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 45,
                                        "items_id" => 18,
                                        "size_title" => "20 Oz Cup",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 46,
                                        "items_id" => 19,
                                        "size_title" => "20 Oz Cup",
                                        "price" => 3.95
                                ),
                         array(
                                        "id" => 47,
                                        "items_id" => 20,
                                        "size_title" => "20 Oz Cup",
                                        "price" => 3.95
                                ),
                        array(
                                        "id" => 48,
                                        "items_id" => 21,
                                        "size_title" => "20 Oz Cup",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 49,
                                        "items_id" => 22,
                                        "size_title" => "Single",
                                        "price" => 1.25
                                ),
                        array(
                                        "id" => 50,
                                        "items_id" => 22,
                                        "size_title" => "Double",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 49,
                                        "items_id" => 22,
                                        "size_title" => "Grande",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 50,
                                        "items_id" => 23,
                                        "size_title" => "Single",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 51,
                                        "items_id" => 23,
                                        "size_title" => "Double",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 52,
                                        "items_id" => 23,
                                        "size_title" => "Grande",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 53,
                                        "items_id" => 24,
                                        "size_title" => "Single",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 54,
                                        "items_id" => 24,
                                        "size_title" => "Double",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 55,
                                        "items_id" => 24,
                                        "size_title" => "Grande",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 56,
                                        "items_id" => 25,
                                        "size_title" => "Single",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 57,
                                        "items_id" => 25,
                                        "size_title" => "Double",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 58,
                                        "items_id" => 25,
                                        "size_title" => "Grande",
                                        "price" => 3.25
                                ),                        
                        array(
                                        "id" => 59,
                                        "items_id" => 26,
                                        "size_title" => "Single",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 60,
                                        "items_id" => 26,
                                        "size_title" => "Double",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 61,
                                        "items_id" => 26,
                                        "size_title" => "Grande",
                                        "price" => 3.25
                                ),                           
                        array(
                                        "id" => 62,
                                        "items_id" => 27,
                                        "size_title" => "Single",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 63,
                                        "items_id" => 27,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 64,
                                        "items_id" => 27,
                                        "size_title" => "Grande",
                                        "price" => 3.75
                                ),                           
                        array(
                                        "id" => 65,
                                        "items_id" => 28,
                                        "size_title" => "Single",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 66,
                                        "items_id" => 28,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 67,
                                        "items_id" => 28,
                                        "size_title" => "Grande",
                                        "price" => 3.75
                                ),   
                        array(
                                        "id" => 68,
                                        "items_id" => 29,
                                        "size_title" => "Single",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 69,
                                        "items_id" => 29,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 70,
                                        "items_id" => 29,
                                        "size_title" => "Grande",
                                        "price" => 3.75
                                ),   
                        array(
                                        "id" => 71,
                                        "items_id" => 30,
                                        "size_title" => "Single",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 72,
                                        "items_id" => 30,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 73,
                                        "items_id" => 30,
                                        "size_title" => "Grande",
                                        "price" => 3.75
                                ),   
                        array(
                                        "id" => 74,
                                        "items_id" => 31,
                                        "size_title" => "Single",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 75,
                                        "items_id" => 31,
                                        "size_title" => "Double",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 76,
                                        "items_id" => 31,
                                        "size_title" => "Grande",
                                        "price" => 4.00
                                ),   
                        array(
                                        "id" => 77,
                                        "items_id" => 32,
                                        "size_title" => "Single",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 78,
                                        "items_id" => 32,
                                        "size_title" => "Double",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 79,
                                        "items_id" => 32,
                                        "size_title" => "Grande",
                                        "price" => 4.00
                                ),   
                        array(
                                        "id" => 80,
                                        "items_id" => 33,
                                        "size_title" => "Single",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 81,
                                        "items_id" => 33,
                                        "size_title" => "Double",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 82,
                                        "items_id" => 33,
                                        "size_title" => "Grande",
                                        "price" => 4.00
                                ),   
                        array(
                                        "id" => 83,
                                        "items_id" => 34,
                                        "size_title" => "Single",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 84,
                                        "items_id" => 34,
                                        "size_title" => "Double",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 85,
                                        "items_id" => 35,
                                        "size_title" => "Single",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 86,
                                        "items_id" => 35,
                                        "size_title" => "Double",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 87,
                                        "items_id" => 36,
                                        "size_title" => "Single",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 88,
                                        "items_id" => 36,
                                        "size_title" => "Double",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 89,
                                        "items_id" => 37,
                                        "size_title" => "Single",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 90,
                                        "items_id" => 37,
                                        "size_title" => "Double",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 91,
                                        "items_id" => 38,
                                        "size_title" => "Single",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 92,
                                        "items_id" => 38,
                                        "size_title" => "Double",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 93,
                                        "items_id" => 39,
                                        "size_title" => "Single",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 94,
                                        "items_id" => 39,
                                        "size_title" => "Double",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 95,
                                        "items_id" => 40,
                                        "size_title" => "Single",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 96,
                                        "items_id" => 40,
                                        "size_title" => "Double",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 97,
                                        "items_id" => 41,
                                        "size_title" => "Single",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 98,
                                        "items_id" => 41,
                                        "size_title" => "Double",
                                        "price" => 4.50
                                ),
                        array(
                                        "id" => 99,
                                        "items_id" => 42,
                                        "size_title" => "Single",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 100,
                                        "items_id" => 42,
                                        "size_title" => "Double",
                                        "price" => 4.50
                                ),
                        array(
                                        "id" => 101,
                                        "items_id" => 43,
                                        "size_title" => "Single",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 102,
                                        "items_id" => 43,
                                        "size_title" => "Double",
                                        "price" => 4.50
                                ),
                        array(
                                        "id" => 103,
                                        "items_id" => 44,
                                        "size_title" => "Single",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 104,
                                        "items_id" => 44,
                                        "size_title" => "Double",
                                        "price" => 4.75
                                ),
                        array(
                                        "id" => 105,
                                        "items_id" => 45,
                                        "size_title" => "Single",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 106,
                                        "items_id" => 45,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 107,
                                        "items_id" => 46,
                                        "size_title" => "Single",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 108,
                                        "items_id" => 46,
                                        "size_title" => "Double",
                                        "price" => 3.75
                                ),                                
                        array(
                                        "id" => 109,
                                        "items_id" => 47,
                                        "size_title" => "Single",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 110,
                                        "items_id" => 47,
                                        "size_title" => "Double",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 111,
                                        "items_id" => 48,
                                        "size_title" => "Single",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 112,
                                        "items_id" => 48,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 113,
                                        "items_id" => 49,
                                        "size_title" => "Single",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 113,
                                        "items_id" => 49,
                                        "size_title" => "Double",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 114,
                                        "items_id" => 50,
                                        "size_title" => "Single",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 115,
                                        "items_id" => 50,
                                        "size_title" => "Double",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 116,
                                        "items_id" => 51,
                                        "size_title" => "Single",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 117,
                                        "items_id" => 51,
                                        "size_title" => "Double",
                                        "price" => 2.75
                                ),
  
                        array(
                                        "id" => 118,
                                        "items_id" => 52,
                                        "size_title" => "Double",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 119,
                                        "items_id" => 53,
                                        "size_title" => "Double",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 120,
                                        "items_id" => 54,
                                        "size_title" => "Double",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 121,
                                        "items_id" => 55,
                                        "size_title" => "Double",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 122,
                                        "items_id" => 56,
                                        "size_title" => "Double",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 123,
                                        "items_id" => 57,
                                        "size_title" => "Double",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 124,
                                        "items_id" => 58,
                                        "size_title" => "Double",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 125,
                                        "items_id" => 59,
                                        "size_title" => "Double",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 126,
                                        "items_id" => 60,
                                        "size_title" => "Double",
                                        "price" => 1.75
                                ),
                        array(
                                        "id" => 127,
                                        "items_id" => 61,
                                        "size_title" => "Double",
                                        "price" => 1.25
                                ),
                        array(
                                        "id" => 128,
                                        "items_id" => 62,
                                        "size_title" => "Double",
                                        "price" => 1.00
                                ),
                        array(
                                        "id" => 129,
                                        "items_id" => 63,
                                        "size_title" => "Small",
                                        "price" => 1.00
                                ),
                        array(
                                        "id" => 130,
                                        "items_id" => 63,
                                        "size_title" => "Medium",
                                        "price" => 1.25
                                ),
                        array(
                                        "id" => 131,
                                        "items_id" => 63,
                                        "size_title" => "Large",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 132,
                                        "items_id" => 64,
                                        "size_title" => "Small",
                                        "price" => 1.25
                                ),
                        array(
                                        "id" => 133,
                                        "items_id" => 64,
                                        "size_title" => "Medium",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 134,
                                        "items_id" => 64,
                                        "size_title" => "Large",
                                        "price" => 1.75
                                ),
                        array(
                                        "id" => 135,
                                        "items_id" => 65,
                                        "size_title" => "Small",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 136,
                                        "items_id" => 65,
                                        "size_title" => "Medium",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 137,
                                        "items_id" => 65,
                                        "size_title" => "Large",
                                        "price" => 3.00
                                ),
                         array(
                                        "id" => 138,
                                        "items_id" => 66,
                                        "size_title" => "Small",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 139,
                                        "items_id" => 66,
                                        "size_title" => "Medium",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 140,
                                        "items_id" => 66,
                                        "size_title" => "Large",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 143,
                                        "items_id" => 67,
                                        "size_title" => "Large",
                                        "price" => 1.75
                                ),   
                         array(
                                        "id" => 144,
                                        "items_id" => 68,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.40
                                ),
                        array(
                                        "id" => 145,
                                        "items_id" => 68,
                                        "size_title" => "16 Oz.",
                                        "price" => 1.70
                                ),
                        array(
                                        "id" => 146,
                                        "items_id" => 68,
                                        "size_title" => "20 Oz.",
                                        "price" => 1.90
                                ),
                        array(
                                        "id" => 147,
                                        "items_id" => 69,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.25
                                ),
                          array(
                                        "id" => 148,
                                        "items_id" => 70,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.40
                                ),
                        array(
                                        "id" => 149,
                                        "items_id" => 70,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.70
                                ),
                        array(
                                        "id" => 149,
                                        "items_id" => 70,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.90
                                ),
                         array(
                                        "id" => 150,
                                        "items_id" => 71,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 151,
                                        "items_id" => 71,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 152,
                                        "items_id" => 71,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.00
                                ),
                         array(
                                        "id" => 153,
                                        "items_id" => 72,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.90
                                ),
                        array(
                                        "id" => 154,
                                        "items_id" => 72,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.20
                                ),
                        array(
                                        "id" => 155,
                                        "items_id" => 72,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.40
                                ), 
                      array(
                                        "id" => 156,
                                        "items_id" => 73,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 157,
                                        "items_id" => 73,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 158,
                                        "items_id" => 73,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.10
                                ), 
                      array(
                                        "id" => 159,
                                        "items_id" => 74,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.35
                                ),
                        array(
                                        "id" => 160,
                                        "items_id" => 74,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 161,
                                        "items_id" => 74,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.15
                                ),
                      array(
                                        "id" => 162,
                                        "items_id" => 75,
                                        "size_title" => "12 Oz.",
                                        "price" => 4.35
                                ),
                        array(
                                        "id" => 163,
                                        "items_id" => 75,
                                        "size_title" => "16 Oz.",
                                        "price" => 4.75
                                ),
                        array(
                                        "id" => 164,
                                        "items_id" => 75,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.95
                                ),
                      array(
                                        "id" => 165,
                                        "items_id" => 76,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 166,
                                        "items_id" => 76,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.95
                                ),
                        array(
                                        "id" => 167,
                                        "items_id" => 76,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.30
                                ),
                      array(
                                        "id" => 168,
                                        "items_id" => 77,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 169,
                                        "items_id" => 77,
                                        "size_title" => "16 Oz.",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 170,
                                        "items_id" => 77,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.50
                                ),
                      array(
                                        "id" => 171,
                                        "items_id" => 78,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 172,
                                        "items_id" => 78,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.95
                                ),
                        array(
                                        "id" => 173,
                                        "items_id" => 78,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.35
                                ),
                      array(
                                        "id" => 174,
                                        "items_id" => 79,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.35
                                ),
                        array(
                                        "id" => 175,
                                        "items_id" => 79,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 176,
                                        "items_id" => 79,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.95
                                ),
                      array(
                                        "id" => 177,
                                        "items_id" => 80,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 178,
                                        "items_id" => 80,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.95
                                ),
                        array(
                                        "id" => 179,
                                        "items_id" => 80,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.35
                                ), 
                      array(
                                        "id" => 180,
                                        "items_id" => 81,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 181,
                                        "items_id" => 81,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 182,
                                        "items_id" => 81,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.25
                                ),
                        array(
                                        "id" => 183,
                                        "items_id" => 82,
                                        "size_title" => "2 Oz.",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 184,
                                        "items_id" => 83,
                                        "size_title" => "2 Oz.",
                                        "price" => 2.00
                                ),                                
                        array(
                                        "id" => 185,
                                        "items_id" => 84,
                                        "size_title" => "8 Oz.",
                                        "price" => 2.30
                                ),
                        array(
                                        "id" => 186,
                                        "items_id" => 85,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.95
                                ),
                        array(
                                        "id" => 187,
                                        "items_id" => 86,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 188,
                                        "items_id" => 87,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 189,
                                        "items_id" => 88,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 190,
                                        "items_id" => 89,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.75
                                ),
                      array(
                                        "id" => 191,
                                        "items_id" => 90,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 191,
                                        "items_id" => 90,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 193,
                                        "items_id" => 90,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.71
                                ),
                      array(
                                        "id" => 194,
                                        "items_id" => 91,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.15
                                ),
                        array(
                                        "id" => 195,
                                        "items_id" => 91,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.65
                                ),
                        array(
                                        "id" => 196,
                                        "items_id" => 91,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.00
                                ), 
                      array(
                                        "id" => 197,
                                        "items_id" => 92,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 198,
                                        "items_id" => 92,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 199,
                                        "items_id" => 92,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.10
                                ),
                        array(
                                        "id" => 200,
                                        "items_id" => 93,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.99
                                ),
                        array(
                                        "id" => 201,
                                        "items_id" => 94,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 202,
                                        "items_id" => 94,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.35
                                ),
                        array(
                                        "id" => 203,
                                        "items_id" => 94,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.50
                                ),                                
                        array(
                                        "id" => 204,
                                        "items_id" => 95,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.35
                                ),
                        array(
                                        "id" => 205,
                                        "items_id" => 95,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 206,
                                        "items_id" => 95,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.35
                                ),
                        array(
                                        "id" => 207,
                                        "items_id" => 96,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.35
                                ),
                        array(
                                        "id" => 208,
                                        "items_id" => 96,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 209,
                                        "items_id" => 96,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.35
                                ), 
                        array(
                                        "id" => 210,
                                        "items_id" => 97,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.85
                                ),
                        array(
                                        "id" => 211,
                                        "items_id" => 97,
                                        "size_title" => "16 Oz.",
                                        "price" => 4.35
                                ),
                        array(
                                        "id" => 212,
                                        "items_id" => 97,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.85
                                ),
                        array(
                                        "id" => 213,
                                        "items_id" => 98,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 214,
                                        "items_id" => 98,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.70
                                ),
                        array(
                                        "id" => 215,
                                        "items_id" => 98,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.95
                                ),
                        array(
                                        "id" => 216,
                                        "items_id" => 99,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.30
                                ),
                        array(
                                        "id" => 217,
                                        "items_id" => 99,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 218,
                                        "items_id" => 99,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 219,
                                        "items_id" => 100,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 220,
                                        "items_id" => 100,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 221,
                                        "items_id" => 100,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 222,
                                        "items_id" => 101,
                                        "size_title" => "12 Oz.",
                                        "price" => 3.30
                                ),
                        array(
                                        "id" => 223,
                                        "items_id" => 101,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 224,
                                        "items_id" => 101,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 225,
                                        "items_id" => 102,
                                        "size_title" => "12 Oz.",
                                        "price" => 4.10
                                ),
                        array(
                                        "id" => 226,
                                        "items_id" => 102,
                                        "size_title" => "16 Oz.",
                                        "price" => 4.35
                                ),
                        array(
                                        "id" => 227,
                                        "items_id" => 102,
                                        "size_title" => "20 Oz.",
                                        "price" => 4.90
                                ), 
                        array(
                                        "id" => 228,
                                        "items_id" => 103,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.50
                                ),   
                        array(
                                        "id" => 229,
                                        "items_id" => 104,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.99
                                ),                                
                        array(
                                        "id" => 230,
                                        "items_id" => 105,
                                        "size_title" => "96 Oz.",
                                        "price" => 16.50
                                ),
                        array(
                                        "id" => 231,
                                        "items_id" => 106,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 232,
                                        "items_id" => 106,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 233,
                                        "items_id" => 107,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 234,
                                        "items_id" => 107,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 235,
                                        "items_id" => 108,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 236,
                                        "items_id" => 108,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 237,
                                        "items_id" => 108,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 238,
                                        "items_id" => 108,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 239,
                                        "items_id" => 109,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 240,
                                        "items_id" => 109,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 241,
                                        "items_id" => 110,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 242,
                                        "items_id" => 110,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 243,
                                        "items_id" => 111,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 244,
                                        "items_id" => 111,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 245,
                                        "items_id" => 112,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 246,
                                        "items_id" => 112,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 247,
                                        "items_id" => 113,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 248,
                                        "items_id" => 113,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 249,
                                        "items_id" => 114,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 250,
                                        "items_id" => 114,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 251,
                                        "items_id" => 115,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 252,
                                        "items_id" => 115,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 253,
                                        "items_id" => 116,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 254,
                                        "items_id" => 116,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 255,
                                        "items_id" => 117,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 256,
                                        "items_id" => 117,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 257,
                                        "items_id" => 118,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 258,
                                        "items_id" => 118,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ), 
                        array(
                                        "id" => 259,
                                        "items_id" => 119,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 260,
                                        "items_id" => 119,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 261,
                                        "items_id" => 120,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 262,
                                        "items_id" => 120,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 263,
                                        "items_id" => 121,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 264,
                                        "items_id" => 121,
                                        "size_title" => "16/20 Oz.",
                                        "price" => 2.50
                                ),
                                
                         /* begin cups menu*/       
                        array(
                                        "id" => 265,
                                        "items_id" => 122,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 266,
                                        "items_id" => 122,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 267,
                                        "items_id" => 122,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 268,
                                        "items_id" => 123,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 269,
                                        "items_id" => 123,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 2.00
                                ),   
                        array(
                                        "id" => 270,
                                        "items_id" => 123,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 2.50
                                ), 
                        array(
                                        "id" => 271,
                                        "items_id" => 124,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 272,
                                        "items_id" => 124,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 2.50
                                ),   
                        array(
                                        "id" => 273,
                                        "items_id" => 124,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 274,
                                        "items_id" => 125,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 275,
                                        "items_id" => 125,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 2.50
                                ),   
                        array(
                                        "id" => 276,
                                        "items_id" => 125,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 2.75
                                ),                                
                        array(
                                        "id" => 277,
                                        "items_id" => 126,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 278,
                                        "items_id" => 126,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 2.75
                                ),   
                        array(
                                        "id" => 279,
                                        "items_id" => 126,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 280,
                                        "items_id" => 127,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 281,
                                        "items_id" => 127,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 3.25
                                ),   
                        array(
                                        "id" => 282,
                                        "items_id" => 127,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 283,
                                        "items_id" => 128,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 284,
                                        "items_id" => 128,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 3.00
                                ),   
                        array(
                                        "id" => 285,
                                        "items_id" => 128,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 286,
                                        "items_id" => 129,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 287,
                                        "items_id" => 129,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 3.00
                                ),   
                        array(
                                        "id" => 288,
                                        "items_id" => 129,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 3.25
                                ),                                
                        array(
                                        "id" => 289,
                                        "items_id" => 130,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.75
                                ),
                        array(
                                        "id" => 290,
                                        "items_id" => 130,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 3.25
                                ),   
                        array(
                                        "id" => 291,
                                        "items_id" => 130,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 292,
                                        "items_id" => 131,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 292,
                                        "items_id" => 131,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 3.50
                                ),   
                        array(
                                        "id" => 292,
                                        "items_id" => 131,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 293,
                                        "items_id" => 132,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 294,
                                        "items_id" => 132,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 3.50
                                ),   
                        array(
                                        "id" => 295,
                                        "items_id" => 132,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 4.00
                                ),                                
                        array(
                                        "id" => 296,
                                        "items_id" => 133,
                                        "size_title" => "Single (12 Oz.)",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 297,
                                        "items_id" => 133,
                                        "size_title" => "Double (12 Oz.)",
                                        "price" => 2.75
                                ),   
                        array(
                                        "id" => 298,
                                        "items_id" => 133,
                                        "size_title" => "Grande (16 Oz.)",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 299,
                                        "items_id" => 134,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.25
                                ),
                        array(
                                        "id" => 300,
                                        "items_id" => 134,
                                        "size_title" => "16 Oz.",
                                        "price" => 1.50
                                ),   
                        array(
                                        "id" => 301,
                                        "items_id" => 134,
                                        "size_title" => "20 Oz.",
                                        "price" => 1.75
                                ),
                        array(
                                        "id" => 302,
                                        "items_id" => 135,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.50
                                ),   
                        array(
                                        "id" => 303,
                                        "items_id" => 135,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 304,
                                        "items_id" => 136,
                                        "size_title" => "12 Oz."
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 305,
                                        "items_id" => 136,
                                        "size_title" => "16 Oz.",
                                        "price" => 1.75
                                ),   
                        array(
                                        "id" => 306,
                                        "items_id" => 136,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.00
                                ),
                         array(
                                        "id" => 307,
                                        "items_id" => 137,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 308,
                                        "items_id" => 137,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 3.75
                                ),   
                         array(
                                        "id" => 309,
                                        "items_id" => 138,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 310,
                                        "items_id" => 138,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 3.75
                                ), 
                         array(
                                        "id" => 311,
                                        "items_id" => 139,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.00
                                ),
                        array(
                                        "id" => 312,
                                        "items_id" => 139,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 3.50
                                ), 
                        array(
                                        "id" => 313,
                                        "items_id" => 140,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 3.25
                                ),                                 
                         array(
                                        "id" => 314,
                                        "items_id" => 141,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.25
                                ),
                        array(
                                        "id" => 315,
                                        "items_id" => 141,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 3.75
                                ), 
                         array(
                                        "id" => 316,
                                        "items_id" => 142,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 317,
                                        "items_id" => 142,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 4.00
                                ), 
                         array(
                                        "id" => 318,
                                        "items_id" => 143,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.50
                                ),
                        array(
                                        "id" => 319,
                                        "items_id" => 143,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 4.00
                                ),  
                         array(
                                        "id" => 320,
                                        "items_id" => 144,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 4.00
                                ),
                        array(
                                        "id" => 321,
                                        "items_id" => 144,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 4.50
                                ),  
                         array(
                                        "id" => 322,
                                        "items_id" => 145,
                                        "size_title" => "Single (16 Oz.)",
                                        "price" => 3.75
                                ),
                        array(
                                        "id" => 323,
                                        "items_id" => 145,
                                        "size_title" => "Double (20 Oz.)",
                                        "price" => 4.25
                                ), 
                         array(
                                        "id" => 324,
                                        "items_id" => 146,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.00
                                ),
                        array(
                                        "id" => 325,
                                        "items_id" => 146,
                                        "size_title" => "16 Oz.",
                                        "price" => 1.25
                                ), 
                         array(
                                        "id" => 326,
                                        "items_id" => 147,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 327,
                                        "items_id" => 147,
                                        "size_title" => "16 Oz.",
                                        "price" => 1.75
                                ), 
                         array(
                                        "id" => 328,
                                        "items_id" => 148,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 329,
                                        "items_id" => 148,
                                        "size_title" => "16 Oz.",
                                        "price" => 3.00
                                ), 
                          array(
                                        "id" => 330,
                                        "items_id" => 149,
                                        "size_title" => "12 Oz.",
                                        "price" => 1.75
                                ),
                        array(
                                        "id" => 331,
                                        "items_id" => 149,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.00
                                ), 
                         array(
                                        "id" => 332,
                                        "items_id" => 150,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.00
                                ),
                        array(
                                        "id" => 333,
                                        "items_id" => 150,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.50
                                ), 
                         array(
                                        "id" => 334,
                                        "items_id" => 151,
                                        "size_title" => "12 Oz.",
                                        "price" => 2.25
                                ),
                        array(
                                        "id" => 335,
                                        "items_id" => 151,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.75
                                ), 
                         array(
                                        "id" => 336,
                                        "items_id" => 152,
                                        "size_title" => "16 Oz.",
                                        "price" => 2.50
                                ),
                        array(
                                        "id" => 337,
                                        "items_id" => 152,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.00
                                ), 
                         array(
                                        "id" => 338,
                                        "items_id" => 153,
                                        "size_title" => "16 Oz.",
                                        "price" => 1.50
                                ),
                        array(
                                        "id" => 339,
                                        "items_id" => 153,
                                        "size_title" => "20 Oz.",
                                        "price" => 2.00
                                ), 
                        array(
                                        "id" => 340,
                                        "items_id" => 154,
                                        "size_title" => "20 Oz.",
                                        "price" => 3.00
                                ),  
                ));
	}

}
