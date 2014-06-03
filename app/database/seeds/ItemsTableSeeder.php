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
                                        "description" => "Either one or two shots of Espresso with the rest of the cup filled with steam milk topped with creamy foam",
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
                                
                        
                        /*Beginning of next Menu id number 2 which corresponds with Art of Espresso*/
                        array(
                                        "id" => 22,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Espresso",
                                        "description" => "Concentrated drink consisting of ground coffee and hot water.  A shot is commonly used to measure espresso which each shot consisting of one ounce of espresso.",
                                        "ratings_id" => 22
                                ),                        
                        array(
                                        "id" => 23,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Americano",
                                        "description" => "1/3 part Espresso and 2/3 parts hot water.  The water adds volume (decreasing concentration) to the caffeine.",
                                        "ratings_id" => 23
                                ),
                        array(
                                        "id" => 24,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Macchiato",
                                        "description" => "Espresso with a dollop of foam",
                                        "ratings_id" => 24
                                ), 
                        array(
                                        "id" => 25,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Cappuccino",
                                        "description" => "1/3 espresso, 1/3 steamed milk, and 1/3 frothed milk or microfoam though some places choose to add more milk to increase volume",
                                        "ratings_id" => 25
                                ),
                        array(
                                        "id" => 26,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Shot in the Dark",
                                        "description" => "Sindle or double shot of espresso in fresh brewwed organic coffee",
                                        "ratings_id" => 26
                                ),            
                        array(
                                        "id" => 27,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Latte",
                                        "description" => "Either one or two shots of Espresso poured over steamed milk with a bunch of foam",
                                        "ratings_id" => 27
                                ), 
                        array(
                                        "id" => 28,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Flavored Latte",
                                        "description" => "Latte (Espresso poured of steamed milk with foam) with an added shot of your favorite flavor (vanilla, hazelnut, caramel etc.)",
                                        "ratings_id" => 28
                                ), 
                        array(
                                        "id" => 29,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Caramel Macchiato",
                                        "description" => "Espresso in steamed vanilla milk with whipped cream and caramel drizzle",
                                        "ratings_id" => 29
                                ),  
                        array(
                                        "id" => 30,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Caffe Mocha",
                                        "description" => "Espresso poured into steamed chocolate milk topped with whipped cream",
                                        "ratings_id" =>30
                                ),                                
                        array(
                                        "id" => 31,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Mint Mocha",
                                        "description" => "Caffe mocha with a splash of peppermint topped with whipped cream",
                                        "ratings_id" => 31
                                ),
                        array(
                                        "id" => 32,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "Mexican Mocha",
                                        "description" => "Caffe mocha made with Iberra chocolate topped with whipped cream",
                                        "ratings_id" => 32
                                ), 
                        array(
                                        "id" => 33,
                                        "menus_id" => 2,
                                        "category_id" => 1,
                                        "title" => "White Chocolate Mocha",
                                        "description" => "White Ghiradelli chocolate blended with espresso topped with whipped cream",
                                        "ratings_id" => 33
                                ),                                
                         array(
                                        "id" => 34,
                                        "menus_id" => 2,
                                        "category_id" => 3,
                                        "title" => "Blended Bliss",
                                        "description" => "Espresso, chocolate, lowfat ice milk blended into a refreshing shake.  Topped with whipped cream.  Delicious!",
                                        "ratings_id" => 34
                                ),
                  array(
                                        "id" => 35,
                                        "menus_id" => 2,
                                        "category_id" => 3,
                                        "title" => "Java Chill (Flavored)",
                                        "description" => "Brewed Espresso, lowfat ice milk blended with a shot of flavor (hazelnut, vanilla, caramel, etc.) topped with whipped cream.",
                                        "ratings_id" => 35
                                ),  
                  array(
                                        "id" => 36,
                                        "menus_id" => 2,
                                        "category_id" => 3,
                                        "title" => "White Mocha Chill",
                                        "description" => "Blended Ghiradelli white chocolate mocha capped with whipped cream",
                                        "ratings_id" => 36
                                ),  
                  array(
                                        "id" => 37,
                                        "menus_id" => 2,
                                        "category_id" => 3,
                                        "title" => "Malty-Malt",
                                        "description" => "Blended chocolate mocha with melted milk topped with whipped cream",
                                        "ratings_id" => 37
                                ),    
                  array(
                                        "id" => 38,
                                        "menus_id" => 2,
                                        "category_id" => 3,
                                        "title" => "Spun Monkey",
                                        "description" => "Blended chocolate mocha spun with a whole banana topped with whipped cream",
                                        "ratings_id" => 38
                                ),
                  array(
                                        "id" => 39,
                                        "menus_id" => 2,
                                        "category_id" => 3,
                                        "title" => "Chocolate Chip Chill",
                                        "description" => "Cold caffe mocha blended with a scopp of Ghiradelli dark chocolate chips",
                                        "ratings_id" => 39
                                ),                                       
                        
                        /*Beginning of next Menu id number 4 which corresponds with Cups*/
                          array(
                                        "id" => 401,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Espresso",
                                        "description" => "Concentrated drink consisting of ground coffee and hot water.  A shot is commonly used to measure espresso which each shot consisting of one ounce of espresso.",
                                        "ratings_id" => 401
                                ),
                                
                          array(
                                        "id" => 402,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Americano",
                                        "description" => "1/3 part Espresso and 2/3 parts hot water.  The water adds volume (decreasing concentration) to the caffeine.",
                                        "ratings_id" => 402
                                ), 
                                
                           array(
                                        "id" => 403,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Hammerhead",
                                        "description" => "A shot of Espresso in a cup of hot coffee- serious medicine! (can also be called a red eye)",
                                        "ratings_id" => 403
                                ),
                        array(
                                        "id" => 404,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Cappuccino",
                                        "description" => "1/3 espresso, 1/3 steamed milk, and 1/3 frothed milk or microfoam though some places choose to add more milk to increase volume",
                                        "ratings_id" => 404
                                ),

                        array(
                                        "id" => 405,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Latte",
                                        "description" => "Either one or two shots of Espresso with the rest of the cup filled with steam milk topped with creamy foam",
                                        "ratings_id" => 405
                                ),
                      array(
                                        "id" => 406,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Caramel Macchiato",
                                        "description" => "",
                                        "ratings_id" => 406
                                ),
                      array(
                                        "id" => 407,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Flavored Latte",
                                        "description" => "",
                                        "ratings_id" => 407
                                ),                                
                      array(
                                        "id" => 408,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Caffe Mocha",
                                        "description" => "",
                                        "ratings_id" => 408
                                ),
                      array(
                                        "id" => 409,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Flavored Mocha",
                                        "description" => "",
                                        "ratings_id" => 409
                                ),
                      array(
                                        "id" => 410,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Mexican Mocha",
                                        "description" => "",
                                        "ratings_id" => 410
                                ),
                      array(
                                        "id" => 411,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Mocha Blanca",
                                        "description" => "",
                                        "ratings_id" => 411
                                ),                                
                      array(
                                        "id" => 412,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "The Dirty Chai",
                                        "description" => "",
                                        "ratings_id" => 412
                                ),                                
                      array(
                                        "id" => 413,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Coffee",
                                        "description" => "",
                                        "ratings_id" => 413
                                ),
                      array(
                                        "id" => 414,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Iced Coffee",
                                        "description" => "",
                                        "ratings_id" => 414
                                ),  
                      array(
                                        "id" => 415,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Cafe au Lait",
                                        "description" => "",
                                        "ratings_id" => 415
                                ),
                      array(
                                        "id" => 416,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "The Granite Bear",
                                        "description" => "",
                                        "ratings_id" => 416
                                ),
                      array(
                                        "id" => 417,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "The Chai Frappe",
                                        "description" => "",
                                        "ratings_id" => 417
                                ), 
                      array(
                                        "id" => 418,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Icce Latte or Mocha",
                                        "description" => "",
                                        "ratings_id" => 418
                                ),                                
                      array(
                                        "id" => 419,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Vietnamese Coffee",
                                        "description" => "",
                                        "ratings_id" => 419
                                ),
                      array(
                                        "id" => 420,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Hazelnut Coffee Shake",
                                        "description" => "",
                                        "ratings_id" => 420
                                ),                                
                      array(
                                        "id" => 421,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "The Cap-banana Shake",
                                        "description" => "",
                                        "ratings_id" => 421
                                ),
                      array(
                                        "id" => 422,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Chocolate Chip Frappe",
                                        "description" => "",
                                        "ratings_id" => 422
                                ),
                      array(
                                        "id" => 423,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Heath Bar or Reeses' Freeze",
                                        "description" => "",
                                        "ratings_id" => 423
                                ),
                      array(
                                        "id" => 424,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Chilled Green Tea Frappe",
                                        "description" => "",
                                        "ratings_id" => 424
                                ),
                      array(
                                        "id" => 426,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Teas",
                                        "description" => "",
                                        "ratings_id" => 426
                                ),
                      array(
                                        "id" => 427,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Tea Latte",
                                        "description" => "",
                                        "ratings_id" => 427
                                ),
                      array(
                                        "id" => 428,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Hot Chai Latte",
                                        "description" => "",
                                        "ratings_id" => 428
                                ),
                      array(
                                        "id" => 429,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Steamer",
                                        "description" => "",
                                        "ratings_id" => 429
                                ),
                      array(
                                        "id" => 430,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Hot Chocolate",
                                        "description" => "",
                                        "ratings_id" => 430
                                ),
                      array(
                                        "id" => 431,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Hot White/Mexican Chocolate",
                                        "description" => "",
                                        "ratings_id" => 431
                                ),                                
                      array(
                                        "id" => 432,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Italian Soda/Cremosa",
                                        "description" => "",
                                        "ratings_id" => 432
                                ),
                      array(
                                        "id" => 433,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Iced Tea",
                                        "description" => "",
                                        "ratings_id" => 433
                                ),
                      array(
                                        "id" => 434,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Iced Chai Latte",
                                        "description" => "",
                                        "ratings_id" => 434
                                ),
                ));

	}

}
