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
                	/*Beginning of menu id 1 correspondin to fairbanks*/
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
	                  array(
	                                        "id" => 40,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Lava Chill",
	                                        "description" => "Espresso and mexican chocolate blended into a tasty cold shake",
	                                        "ratings_id" => 40
	                                ),   	                                
	                  array(
	                                        "id" => 41,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Minty-Mint",
	                                        "description" => "Blended mocha spun with a whole peppermint patty topped with whipped cream",
	                                        "ratings_id" => 41
	                                ),                           
	                  array(
	                                        "id" => 42,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "PB Blend",
	                                        "description" => "Blended mocha spun with 2 Reeses peanut butter cups topped with whipped cream",
	                                        "ratings_id" => 42
	                                ),   
	                  array(
	                                        "id" => 43,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Heath Bar Blend",
	                                        "description" => "Blended mocha spun with 2 Toffee Heath bars topped with whipped cream",
	                                        "ratings_id" => 43
	                                ),   	                                
	                  array(
	                                        "id" => 44,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Chocolate Monkey",
	                                        "description" => "The Spun Monkey blended with a scoop of dark chocolate chips. The ultimate!",
	                                        "ratings_id" => 44
	                                ), 
	                  array(
	                                        "id" => 45,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Iced Latte",
	                                        "description" => "Either one or two shots of Espresso poured over steamed milk with a bunch of foam on ice",
	                                        "ratings_id" => 45
	                                ),
	                  array(
	                                        "id" => 46,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Iced Mocha",
	                                        "description" => "Espresso poured into steamed chocolate milk topped with whipped cream on ice",
	                                        "ratings_id" => 46
	                                ),	                                
	                  array(
	                                        "id" => 47,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Iced White Mocha",
	                                        "description" => "White Ghiradelli chocolate blended with espresso topped with whipped cream on ice",
	                                        "ratings_id" => 47
	                                ),	                                
	                  array(
	                                        "id" => 48,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Vietnamese Coffee (Iced)",
	                                        "description" => "Hot espresso with sweetened condensed milk poured over ice",
	                                        "ratings_id" => 48
	                                ),                        
	                  array(
	                                        "id" => 49,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Caffe Freddo",
	                                        "description" => "Hot espresso with sugar poured over ice and whipped",
	                                        "ratings_id" => 49
	                          ),  
                	  array(
	                                        "id" => 50,
	                                        "menus_id" => 2,
	                                        "category_id" => 3,
	                                        "title" => "Caffe Freddo Cappuccino",
	                                        "description" => "Hot espresso wutg sugar poured over ice topped with wipped milk",
	                                        "ratings_id" => 50
	                          ),	                                
                          array(
	                                 "id" => 51,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Affogato",
	                                 "description" => "A shot of espresso poured over a scoop of vanilla ice cream",
	                                 "ratings_id" => 51
	                          ),
             		  array(
	                                 "id" => 52,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Iced Coffee",
	                                 "description" => "Freshly brewed organic house coffee chilled and iced!",
	                                 "ratings_id" => 52
	                          ),	                                
	                  
             		  array(
	                                 "id" => 53,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Blended Chai Shake",
	                                 "description" => "Spiced or Vanilla: Chai Tea blended with lowfat ice milk topped with whipped cream",
	                                 "ratings_id" => 53
	                          ),
             		 array(
	                                 "id" => 54,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Spiced Monkey",
	                                 "description" => "Spiced Chai Shake with a whole banana blended until smooth",
	                                 "ratings_id" => 54
	                      ),
          		 array(
	                                 "id" => 55,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Matcha Chill",
	                                 "description" => "Matcha Green Tea blended with lowfat ice milk topped with whipped cream",
	                                 "ratings_id" => 55
	                         ),
          		 array(
	                                 "id" => 56,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Smoothies",
	                                 "description" => "Fresh Frozen fruit blended with apple juice & nonfat yogurt",
	                                 "ratings_id" => 56
	                         ),	                         
          		 array(
	                                 "id" => 57,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Italian Soda",
	                                 "description" => "Sparkling mineral water with a shot of Italian syrup on ice",
	                                 "ratings_id" => 57
	                         ),
          		 array(
	                                 "id" => 58,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Iced Chai",
	                                 "description" => "Spiced of Vanilla",
	                                 "ratings_id" => 58
	                         ),	                         
          		 array(
	                                 "id" => 59,
	                                 "menus_id" => 2,
	                                 "category_id" => 3,
	                                 "title" => "Iced Tea",
	                                 "description" => "Brewed black tea with passion fruit",
	                                 "ratings_id" => 59
	                         ),	                        
          		 array(
	                                 "id" => 60,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Snapple/Perrier/Flavored Peligrino",
	                                 "description" => "",
	                                 "ratings_id" => 60
	                         ),	                            
          		 array(
	                                 "id" => 61,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Sodas",
	                                 "description" => "Coke, Diet Coke, 7-up, Dr. Pepper",
	                                 "ratings_id" => 61
	                         ),
          		 array(
	                                 "id" => 62,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Bottled Water/Juice",
	                                 "description" => "Spiced Chai Shake with a whole banana blended until smooth",
	                                 "ratings_id" => 62
	                         ),
          		 array(
	                                 "id" => 63,
	                                 "menus_id" => 2,
	                                 "category_id" => 1,
	                                 "title" => "Coffee",
	                                 "description" => "A variety of freshly brewed organic roasts",
	                                 "ratings_id" => 63
	                         ),
          		 array(
	                                 "id" => 64,
	                                 "menus_id" => 2,
	                                 "category_id" => 1,
	                                 "title" => "Cafe au Lait",
	                                 "description" => "Your choice of brewed organic coffee with steamed milk",
	                                 "ratings_id" => 64
	                         ),
          		 array(
	                                 "id" => 65,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Hot Spiced of Vanilla Chai",
	                                 "description" => "An inspiring blend of darjeeling tea, cardamones and honey",
	                                 "ratings_id" => 65
	                         ),
          		 array(
	                                 "id" => 66,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Hot Cocoa",
	                                 "description" => "Steamed milk chocolate and whipped cream (White or Mexican 25cents extra)",
	                                 "ratings_id" => 66
	                         ),
          		 array(
	                                 "id" => 67,
	                                 "menus_id" => 2,
	                                 "category_id" => 2,
	                                 "title" => "Hot Tea",
	                                 "description" => "Black, Green or Herbal",
	                                 "ratings_id" => 67
	                         ),	                         
	                         
	                /*Beginning of next Menu id number 3 which corresponds with Perks*/
          		 array(
	                                 "id" => 68,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Fresh Brewed Coffee",
	                                 "description" => "We brew Barefoot Coffee Roosters COffee, Fair trade, shade grown coffee, Regular or decaf",
	                                 "ratings_id" => 68
	                         ),	                
          		 array(
	                                 "id" => 69,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Pour Over Coffee",
	                                 "description" => "Hand crafted, freshly brewed to order",
	                                 "ratings_id" => 69
	                         ),
          		 array(
	                                 "id" => 70,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Hammerhead",
	                                 "description" => "Brewed coffee with a double shot of espresso",
	                                 "ratings_id" => 70
	                         ),	                         
          		 array(
	                                 "id" => 71,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cafe Latte",
	                                 "description" => "Espresso and steamed milk. (add flavored syrups, additional .50)",
	                                 "ratings_id" => 71
	                         ),	                 
          		 array(
	                                 "id" => 72,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cafe Au Lait",
	                                 "description" => "Fresh brewed coffee and steamed milk",
	                                 "ratings_id" => 72
	                         ),	                       
          		 array(
	                                 "id" => 73,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cafe Mocha",
	                                 "description" => "Espresso, chocolate, steamed milk and topped with whipped cream",
	                                 "ratings_id" => 73
	                         ),	                       
          		 array(
	                                 "id" => 74,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "White Chocolate Mocha",
	                                 "description" => "White chocolate, espresso, steamed milk and topped with whipped cream",
	                                 "ratings_id" => 74
	                         ),	                         
          		 array(
	                                 "id" => 75,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Spicy Mocha",
	                                 "description" => "Dark chocolate, spicy chile, cinnamon with a shot of espresso",
	                                 "ratings_id" => 75
	                         ),	                 
          		 array(
	                                 "id" => 76,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Nutella Latte",
	                                 "description" => "Rich, chocalately hazelnut spread with espresso and steamed milk, topped with whipped cream",
	                                 "ratings_id" => 76
	                         ),	                         
          		 array(
	                                 "id" => 77,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Almond or Soy Latte",
	                                 "description" => "Espresso and steamed almond/soy milk",
	                                 "ratings_id" => 77
	                         ),
          		 array(
	                                 "id" => 78,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Hot Chocolate",
	                                 "description" => "Dark chocolate with ",
	                                 "ratings_id" => 78
	                         ),
          		 array(
	                                 "id" => 79,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Chuco Spicy Maya Chocolate",
	                                 "description" => "Smooth dark chocolate with a mix of spicy chile and a bunch of cinnamon",
	                                 "ratings_id" => 79
	                         ),
          		 array(
	                                 "id" => 80,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "White Hot Chocolate",
	                                 "description" => "A sweet and delicious white chocolate",
	                                 "ratings_id" => 80
	                         ),	                         
          		 array(
	                                 "id" => 81,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Nutella Hot Chocolate",
	                                 "description" => "Smooth chocolate and hazelnut spread",
	                                 "ratings_id" => 81
	                         ),
          		 array(
	                                 "id" => 82,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Bare Espresso",
	                                 "description" => "Double Espresso shot",
	                                 "ratings_id" => 82
	                         ),
          		 array(
	                                 "id" => 83,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Espresso Con Panna",
	                                 "description" => "Espresso with a sweet touch of whipped cream",
	                                 "ratings_id" => 83
	                         ),	                         
          		 array(
	                                 "id" => 84,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Espresso Macchiato",
	                                 "description" => "Espresso topped with a rich milk foam",
	                                 "ratings_id" => 84
	                         ),
          		 array(
	                                 "id" => 85,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cappuccino",
	                                 "description" => "Espresso and steam milk topped with foam",
	                                 "ratings_id" => 85
	                         ),
          		 array(
	                                 "id" => 86,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cubano",
	                                 "description" => "Latte prepared with brown sugar caramelized in the shot",
	                                 "ratings_id" => 86
	                         ),
          		 array(
	                                 "id" => 87,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cafe Cacao",
	                                 "description" => "A Latte with the silky intensity of pure cacao - a wonderfully unsweetened mocha experience",
	                                 "ratings_id" => 87
	                         ),
          		 array(
	                                 "id" => 88,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Cafe Americano",
	                                 "description" => "Espresso and hot water",
	                                 "ratings_id" => 88
	                         ),	                         
          		 array(
	                                 "id" => 89,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Iced Vietnamese Coffee",
	                                 "description" => "Traditional style sweet coffee, 4 shots of espresso, 2oz. sweetened condensed milk (additional milk .50cents)",
	                                 "ratings_id" => 89
	                         ),
          		 array(
	                                 "id" => 90,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Iced Cafe Latte",
	                                 "description" => "Freshly Brewed espresso with milk on ice",
	                                 "ratings_id" => 90
	                         ),
          		 array(
	                                 "id" => 91,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Iced Cafe Mocha",
	                                 "description" => "Espresso with milk and chocolate on ice",
	                                 "ratings_id" => 91
	                         ),	                         
          		 array(
	                                 "id" => 92,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Iced White Chocolate Mocha",
	                                 "description" => "Espresso, milk and white chocolate on ice",
	                                 "ratings_id" => 92
	                         ),	                         
          		 array(
	                                 "id" => 93,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Italian Cream Soda",
	                                 "description" => "Any of our flavored syrups, soda water, half and half, served on ice",
	                                 "ratings_id" => 93
	                         ),
          		 array(
	                                 "id" => 94,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Iced Tea",
	                                 "description" => "Your favorite brewed tea on ice",
	                                 "ratings_id" => 94
	                         ),
          		 array(
	                                 "id" => 95,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Mocha Blended Coffee",
	                                 "description" => "Iced blended coffee with a rich chocolate mix",
	                                 "ratings_id" => 95
	                         ),
          		 array(
	                                 "id" => 96,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "White Mocha Blended Coffe",
	                                 "description" => "Iced coffee blended with white chocolate",
	                                 "ratings_id" => 96
	                         ),
          		 array(
	                                 "id" => 97,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Flavored Blended Coffee",
	                                 "description" => "A blended coffee with choice of syrup",
	                                 "ratings_id" => 97
	                         ),
          		 array(
	                                 "id" => 98,
	                                 "menus_id" => 3,
	                                 "category_id" => 3,
	                                 "title" => "Iced Coffe",
	                                 "description" => "Refreshing fair trade and organic coffee",
	                                 "ratings_id" => 98
	                         ),
          		 array(
	                                 "id" => 99,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Green Tea Latte",
	                                 "description" => "Matcha green tea, steamed milk and whipped cream",
	                                 "ratings_id" => 99
	                         ),	                         
          		 array(
	                                 "id" => 100,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Tea Au Lait",
	                                 "description" => "Fresh tea and steamed milk",
	                                 "ratings_id" => 100
	                         ),
          		 array(
	                                 "id" => 101,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Chai Latte",
	                                 "description" => "Spiced black tea with steamed milk",
	                                 "ratings_id" => 67
	                         ),
          		 array(
	                                 "id" => 102,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Dirty Chai Latte",
	                                 "description" => "Spiced black tea with steamed milk, made dirty with an espresso double shot",
	                                 "ratings_id" => 102
	                         ),	                         
          		 array(
	                                 "id" => 103,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Steamed Milk",
	                                 "description" => "So yummy it will put you to sleep",
	                                 "ratings_id" => 103
	                         ),
          		 array(
	                                 "id" => 104,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Fresh Squeezed Lemonade ",
	                                 "description" => "Made fresh and sweetened with organic sugar",
	                                 "ratings_id" => 67
	                         ),
          		 array(
	                                 "id" => 105,
	                                 "menus_id" => 3,
	                                 "category_id" => 1,
	                                 "title" => "Coffee TO-Go",
	                                 "description" => "96oz. container serves 12 eight ox. cups.  Includes creamers, sugar, cups and stirrers",
	                                 "ratings_id" => 105
	                         ),
          		 array(
	                                 "id" => 106,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Earl Grey Tea",
	                                 "description" => "A Black Tea with French vanilla undertones",
	                                 "ratings_id" => 106
	                         ),
          		 array(
	                                 "id" => 107,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Masala Chai Tea",
	                                 "description" => "A Black assam tea with chai spices",
	                                 "ratings_id" => 107
	                         ),	                         
          		 array(
	                                 "id" => 108,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "English Breakfast Tea",
	                                 "description" => "A Black tea with a traditional, robust, full-bodied blend",
	                                 "ratings_id" => 105
	                         ),
          		 array(
	                                 "id" => 109,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Scottish Caramel Tea",
	                                 "description" => "A Black, Pu-erh tea with caramel",
	                                 "ratings_id" => 109
	                         ),
          		 array(
	                                 "id" => 110,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "White Coconut Creme Tea",
	                                 "description" => "A sweet, creamy and soothing white tea",
	                                 "ratings_id" => 110
	                         ),
          		 array(
	                                 "id" => 111,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Organic Gunpowder Tea",
	                                 "description" => "A green tea with a hint of smokiness and a fruity note",
	                                 "ratings_id" => 111
	                         ),
          		 array(
	                                 "id" => 112,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "China Jasmine Tea",
	                                 "description" => "A floral green tea with jasmine",
	                                 "ratings_id" => 112
	                         ),
          		 array(
	                                 "id" => 113,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Yerba mate",
	                                 "description" => "Green tes with traditional mate flavors and earth undertones",
	                                 "ratings_id" => 113
	                         ),	 
          		 array(
	                                 "id" => 114,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Cherry Rose Tea",
	                                 "description" => "A green tea with sweet cherry and morning rose",
	                                 "ratings_id" => 114
	                         ),
          		 array(
	                                 "id" => 115,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Green Tangerine Tea",
	                                 "description" => "A green tea with a fruity, citrus taste",
	                                 "ratings_id" => 115
	                         ),	 
          		 array(
	                                 "id" => 116,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Blood Orange Tea",
	                                 "description" => "An herbal tea with rose, blood orange and hibiscus",
	                                 "ratings_id" => 116
	                         ),
          		 array(
	                                 "id" => 117,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "French Lemon Ginger Tea",
	                                 "description" => "An verbos herbal tea with verbena, lemongrass and ginger",
	                                 "ratings_id" => 105
	                         ),	 
          		 array(
	                                 "id" => 118,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Egyptian Chamomile Tea",
	                                 "description" => "A calming herbal tea with a honey-sweet fusion",
	                                 "ratings_id" => 118
	                         ),	
          		 array(
	                                 "id" => 119,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Peppermint Tea",
	                                 "description" => "A fresh, delicious and refreshing herbal tea",
	                                 "ratings_id" => 119
	                         ),
          		 array(
	                                 "id" => 120,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Hawaiin Berries Tea",
	                                 "description" => "An herbal tea made of a hibiscus and tropical fruit blend",
	                                 "ratings_id" => 120
	                         ),	                    
          		 array(
	                                 "id" => 121,
	                                 "menus_id" => 3,
	                                 "category_id" => 2,
	                                 "title" => "Kiwi Tea",
	                                 "description" => "An herbal with kiwi, cherries, coconut and apples",
	                                 "ratings_id" => 121
	                         ),	   
	                         
                        /*Beginning of next Menu id number 4 which corresponds with Cups*/
                          array(
                                        "id" => 122,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Espresso",
                                        "description" => "Concentrated drink consisting of ground coffee and hot water.  A shot is commonly used to measure espresso which each shot consisting of one ounce of espresso.",
                                        "ratings_id" => 122
                                ),
                                
                          array(
                                        "id" => 123,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Americano",
                                        "description" => "1/3 part Espresso and 2/3 parts hot water.  The water adds volume (decreasing concentration) to the caffeine.",
                                        "ratings_id" => 123
                                ), 
                                
                           array(
                                        "id" => 124,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Hammerhead",
                                        "description" => "A shot of Espresso in a cup of hot coffee- serious medicine! (can also be called a red eye)",
                                        "ratings_id" => 124
                                ),
                        array(
                                        "id" => 125,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Cappuccino",
                                        "description" => "1/3 espresso, 1/3 steamed milk, and 1/3 frothed milk or microfoam though some places choose to add more milk to increase volume",
                                        "ratings_id" => 125
                                ),

                        array(
                                        "id" => 126,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Latte",
                                        "description" => "Either one or two shots of Espresso with the rest of the cup filled with steam milk topped with creamy foam",
                                        "ratings_id" => 126
                                ),
                      array(
                                        "id" => 127,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Caramel Macchiato",
                                        "description" => "",
                                        "ratings_id" => 127
                                ),
                      array(
                                        "id" => 128,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Flavored Latte",
                                        "description" => "Either one or two shots of Espresso with the rest of the cup filled with steam milk topped with creamy foam with your favorite flavor",
                                        "ratings_id" => 128
                                ),                                
                      array(
                                        "id" => 129,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Caffe Mocha",
                                        "description" => "",
                                        "ratings_id" => 129
                                ),
                      array(
                                        "id" => 130,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Flavored Mocha",
                                        "description" => "",
                                        "ratings_id" => 130
                                ),
                      array(
                                        "id" => 131,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Mexican Mocha",
                                        "description" => "",
                                        "ratings_id" => 131
                                ),
                      array(
                                        "id" => 132,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Mocha Blanca",
                                        "description" => "",
                                        "ratings_id" => 132
                                ),                                
                      array(
                                        "id" => 133,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "The Dirty Chai",
                                        "description" => "",
                                        "ratings_id" => 133
                                ),                                
                      array(
                                        "id" => 134,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Coffee",
                                        "description" => "",
                                        "ratings_id" => 134
                                ),
                      array(
                                        "id" => 135,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Iced Coffee",
                                        "description" => "",
                                        "ratings_id" => 135
                                ),  
                      array(
                                        "id" => 136,
                                        "menus_id" => 4,
                                        "category_id" => 1,
                                        "title" => "Cafe au Lait",
                                        "description" => "",
                                        "ratings_id" => 136
                                ),
                      array(
                                        "id" => 137,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "The Granite Bear",
                                        "description" => "Specialized Ultimate Espresso blended with lo-fat chocolate ice milk, topped with whipped cream",
                                        "ratings_id" => 137
                                ),
                      array(
                                        "id" => 138,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "The Chai Frappe",
                                        "description" => "A blend of Spiced Chai and ice cream, topped with whipped cream",
                                        "ratings_id" => 138
                                ), 
                      array(
                                        "id" => 139,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Icce Latte or Mocha",
                                        "description" => "",
                                        "ratings_id" => 139
                                ),                                
                      array(
                                        "id" => 140,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Vietnamese Coffee",
                                        "description" => "Espresso blended with sweetened condensed milk over ice",
                                        "ratings_id" => 140
                                ),
                      array(
                                        "id" => 141,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Hazelnut Coffee Shake",
                                        "description" => "A lo-fat treat: hazelnut and vanilla blended with espresso and ice cream.  Topped with whipped cream",
                                        "ratings_id" => 141
                                ),                                
                      array(
                                        "id" => 142,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "The Cap-banana Shake",
                                        "description" => "A fresh 1/2 banana, blended with chocolate espresso, and lo-fat ice cream.  Topped with whipped cream",
                                        "ratings_id" => 142
                                ),
                      array(
                                        "id" => 143,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Chocolate Chip Frappe",
                                        "description" => "The Granite Bear (blended espresso and ice cream) blended with a handful of Ghiradelli chocolate chips",
                                        "ratings_id" => 143
                                ),
                      array(
                                        "id" => 144,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Heath Bar or Reeses' Freeze",
                                        "description" => "You guessed it.  The famous Granite Bear (blended espresso and ice cream)with not one but two Heath Bars or peanut butter cups",
                                        "ratings_id" => 144
                                ),
                      array(
                                        "id" => 145,
                                        "menus_id" => 4,
                                        "category_id" => 3,
                                        "title" => "Chilled Green Tea Frappe",
                                        "description" => "A blended sweetened motcha green tea, milk and ice.  Topped with whipped cream",
                                        "ratings_id" => 145
                                ),
                      array(
                                        "id" => 146,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Teas",
                                        "description" => "",
                                        "ratings_id" => 146
                                ),
                      array(
                                        "id" => 147,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Tea Latte",
                                        "description" => "",
                                        "ratings_id" => 147
                                ),
                      array(
                                        "id" => 148,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Hot Chai Latte",
                                        "description" => "Spiced, Vanilla, Decaf or Green Tea.  A delicious blend of darjeeling tea, cinammon, cardamom, honey and non-fat milk",
                                        "ratings_id" => 148
                                ),
                      array(
                                        "id" => 149,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Steamer",
                                        "description" => "Made with steamed milk and our favorites syrup",
                                        "ratings_id" => 149
                                ),
                      array(
                                        "id" => 150,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Hot Chocolate",
                                        "description" => "Made with steamed milk chocolate and whipped cream",
                                        "ratings_id" => 150
                                ),
                      array(
                                        "id" => 151,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Hot White/Mexican Chocolate",
                                        "description" => "white heat cocao powder, or mexican chocolate steamed with milk and topped with whipped cream",
                                        "ratings_id" => 151
                                ),                                
                      array(
                                        "id" => 152,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Italian Soda/Cremosa",
                                        "description" => "Sparkling mineral water, flavored with Italian syrup served over ice.  Favorites include raspberry, peach, lime, mandarim orange and employee favorite the Strawberry Angle (strawberry and coconut with a dash of cream)",
                                        "ratings_id" => 152
                                ),
                      array(
                                        "id" => 153,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Iced Tea",
                                        "description" => "Fresh Brewed, Awake and Passion Tea Combo",
                                        "ratings_id" => 153
                                ),
                      array(
                                        "id" => 154,
                                        "menus_id" => 4,
                                        "category_id" => 2,
                                        "title" => "Iced Chai Latte",
                                        "description" => "",
                                        "ratings_id" => 154
                                ),
                ));

	}

}
