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
                                        "description" => "Concentrated drink consisting of ground coffee and hot water.  A shot is commonly used to measure espresso which each shot consisting of one ounce of espresso.",
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
                                        "description" => "1/3 part Espresso and 2/3 parts hot water.  The water adds volume (decreasing concentration) to the caffeine.",
                                        "ratings_id" => 3
                                ), 

                        array(
                                        "id" => 4,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cafe au Lait",
                                        "description" => "Half coffee, half steamed milk, topped with creamy foam which makes sense given the name means 'Coffee with Foam' in French",
                                        "ratings_id" => 4
                                ), 
                        array(
                                        "id" => 5,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Hammerhead",
                                        "description" => "A shot of Espresso in a cup of hot coffee- serious medicine! (can also be called a red eye)",
                                        "ratings_id" => 5
                                ),
                        array(
                                        "id" => 6,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cappuccino",
                                        "description" => "1/3 espresso, 1/3 steamed milk, and 1/3 frothed milk or microfoam though some places choose to add more milk to increase volume",
                                        "ratings_id" => 6
                                ),

                        array(
                                        "id" => 7,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cafe Mocha",
                                        "description" => "Espresso, steamed milk & Ghiradelli chocolate, topped with whipped cream. (though other locations may just make a cafe late with chocolate syrup)",
                                        "ratings_id" => 7
                                ), 

                        array(
                                        "id" => 8,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Cafe Latte",
                                        "description" => "Esspresso & steamed milk, topped with creamy foam.",
                                        "ratings_id" => 8
                                ),
                        array(
                                        "id" => 9,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "White Chocolate Mocha",
                                        "description" => "Espresso, steamed milk & Ghiradelli white chocolate, topped with whipped cream",
                                        "ratings_id" => 9
                                ),
                        array(
                                        "id" => 10,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Mexican Mocha",
                                        "description" => "Espresso, steamed milk & Ibara chocolate, topped with whipped cream & cinnamon",
                                        "ratings_id" => 10
                                ),

                        array(
                                        "id" => 11,
                                        "menus_id" => 1,
                                        "category_id" => 1,
                                        "title" => "Breve Latte",
                                        "description" => "1/2 Espresso & 1/2 steamed milk",
                                        "ratings_id" => 11
                                ), 

                        array(
                                        "id" => 12,
                                        "menus_id" => 1,
                                        "category_id" => 2,
                                        "title" => "Hot Tea",
                                        "description" => "Your choice of black, green or herbal tea",
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
                                        "title" => "Iced Americano",
                                        "description" => "1/3 part Espresso and 2/3 parts water put on ice.  The water adds volume to (and decreses the concentration of) the caffeine.",
                                        "ratings_id" => 17
                                ), 

                        array(
                                        "id" => 18,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced latte or cappuccino",
                                        "description" => "Your favorite latte (espresso and steamed milk) or cappuccino (espresso, steamed milk, and frothed milk)",
                                        "ratings_id" => 18
                                ),
                        array(
                                        "id" => 19,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced Mocha",
                                        "description" => "Espresso, steamed milk & Ghiradelli chocolate, topped with whipped cream put on ice.",
                                        "ratings_id" => 19
                                ),
                        array(
                                        "id" => 20,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Spice on Ice",
                                        "description" => "Iced Chai Tea Latte: Sweet, spicy black tea & steamed milk on ice.",
                                        "ratings_id" => 20
                                ),

                        array(
                                        "id" => 21,
                                        "menus_id" => 1,
                                        "category_id" => 3,
                                        "title" => "Iced White",
                                        "description" => "White Chocolate Mocha: Espresso, steamed milk & Ghiradelli white chocolate, topped with whipped cream on ice",
                                        "ratings_id" => 21
                                ), 

                ));

	}

}
