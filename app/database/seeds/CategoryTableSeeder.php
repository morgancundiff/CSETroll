<?php

use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{

		// $table->increments('id');
		// $table->integer('items_id');
		// $table->string('title');
		
		DB::table('category')->delete();
		   
        DB::table('category')->insert(
                array(
                        array(
                                        "id" => 1,
                                        "category" => "Hot Drinks",
                                ),
 
                         array(
                                        "id" => 2,
                                        "category" => "Coffee Alternatives",
                                ),
 
                         array(
                                        "id" => 3,
                                        "category" => "On The Rocks",
                                ),
 
                ));
	}

}