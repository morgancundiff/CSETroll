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

                        
                        
                        
                ));


	}

}