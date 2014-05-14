<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder {

	public function run()
	{
			// $table->increments('id');
			// $table->integer('menus_id');
			// $table->string('category');
			// $table->string('title');
			// $table->string('description');
			// $table->integer('size_id');
			// $table->integer('ratings_id');
			
		DB::table('items')->delete();
		   
        DB::table('items')->insert(
                array(
                        array(
                                        "id" => 1,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Espresso",
                                        "description" => "",
                                        "ratings_id" => 1
                                ),
                        array(
                                        "id" => 2,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Fresh Brewed Gavina Coffee",
                                        "description" => "",
                                        "ratings_id" => 2
                                ),

                        array(
                                        "id" => 3,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Americano",
                                        "description" => "Espresso with Water",
                                        "ratings_id" => 3
                                ), 

                        array(
                                        "id" => 4,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cafe au Lait",
                                        "description" => "Half Coffee, half steamed milk, topped with creamy foam",
                                        "ratings_id" => 4
                                ), 
                        array(
                                        "id" => 5,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Hammerhead",
                                        "description" => "hot coffee & espresso - serious medicine!",
                                        "ratings_id" => 5
                                ),
                        array(
                                        "id" => 6,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cappuccino",
                                        "description" => "Cafe Latte with less milk & more foam",
                                        "ratings_id" => 6
                                ),

                        array(
                                        "id" => 7,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cafe Mocha",
                                        "description" => "espresso, steamed milk & Ghiradelli chocolate, topped with whipped cream",
                                        "ratings_id" => 7
                                ), 

                        array(
                                        "id" => 8,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cafe Latte",
                                        "description" => "esspresso & steamed milk, topped with creamy foam",
                                        "ratings_id" => 8
                                ),
                        array(
                                        "id" => 9,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Wjite Chocolate Mocha",
                                        "description" => "espresso, steamed milk & Ghiradelli white chocolate, topped with whipped cream",
                                        "ratings_id" => 9
                                ),
                        array(
                                        "id" => 10,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Mexican Mocha",
                                        "description" => "espresso, steamed milk & Ibara chocolate, topped with whipped cream & cinnamon",
                                        "ratings_id" => 10
                                ),

                        array(
                                        "id" => 11,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Breve Latte",
                                        "description" => "espresso & steamed half & half",
                                        "ratings_id" => 11
                                ), 

                        array(
                                        "id" => 12,
                                        "menus_id" => 1,
                                        "category_id" => 2,
                                        "title" => "Hot Tea",
                                        "description" => "variety of black, gree & herbal teas",
                                        "ratings_id" => 12
                                ), 
                        array(
                                        "id" => 13,
                                        "menus_id" => 1,
                                        "category_id" => 2,
                                        "title" => "Hot Chocolate",
                                        "description" => "Ghiradelli chocoloate & steamed milk, topped with whipped cream",
                                        "ratings_id" => 13
                                ),
                        array(
                                        "id" => 14,
                                        "menus_id" => 1,
                                        "category_id" => 2,
                                        "title" => "Streamer",
                                        "description" => "Steamed milk with your choice of flavored syrup",
                                        "ratings_id" => 14
                                ),

                        array(
                                        "id" => 15,
                                        "menus_id" => 1,
                                        "category_id" => 2,
                                        "title" => "Chai Latte",
                                        "description" => "Sweet, spicy black tea & steamed milk",
                                        "ratings_id" => 15
                                ), 

                        array(
                                        "id" => 16,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced tea or coffee",
                                        "description" => "",
                                        "ratings_id" => 16
                                ), 
                        array(
                                        "id" => 17,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Americano",
                                        "description" => "",
                                        "ratings_id" => 17
                                ), 

                        array(
                                        "id" => 18,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced latte or cappuccino",
                                        "description" => "",
                                        "ratings_id" => 18
                                ),
                        array(
                                        "id" => 19,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced Mocha",
                                        "description" => "",
                                        "ratings_id" => 19
                                ),
                        array(
                                        "id" => 20,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Spice on Ice",
                                        "description" => "Chai Tea Latte",
                                        "ratings_id" => 20
                                ),

                        array(
                                        "id" => 21,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced White",
                                        "description" => "White Chocolate Mocha",
                                        "ratings_id" => 21
                                ), 

                ));

	}

}