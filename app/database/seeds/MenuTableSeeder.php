<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MenuTableSeeder extends Seeder {

	public function run()
	{
		
		DB::table('menus')->delete();
		   
        DB::table('menus')->insert(
                array(
                        array(
                        		"id" => 1,
                        		"locations_id" => 2,
                        		"menu" => '{"menu":[{"menu_id":"1","title":"Espresso","description":"","category":"Hot Drinks","rating":"3.5","size":{"small":"$1.25","medium":"$1.75"}},{"menu_id":"2","title":"Fresh Brewed Gavina Coffee","category":"Hot Drinks","rating":"3.5","description":"","size":{"small":"$1.50","medium":"$1.70","large":"$1.90"}},{"menu_id":"3","title":"Americano","category":"Hot Drinks","rating":"3.5","description":"Espresso with Water","size":{"small":"$1.75","medium":"$2.10","large":"$2.40"}},{"menu_id":"4","title":"Cafe au Lait","category":"Hot Drinks","rating":"3.5","description":"Half Coffee, half steamed milk, topped with creamy foam","size":{"small":"$2.00","medium":"$2.30","large":"$2.50"}},{"menu_id":"5","title":"Hammerhed","category":"Hot Drinks","rating":"3.5","description":"hot coffee & espresso - serious medicine!","size":{"small":"$2.00","medium":"$2.30","large":"$2.50"}},{"menu_id":"6","title":"Cafe Latte","category":"Hot Drinks","rating":"3.5","description":"esspresso & steamed milk, topped with creamy foam","size":{"small":"$2.90","medium":"$3.50","large":"$3.75"}},{"menu_id":"7","title":"Cappuccino","category":"Hot Drinks","rating":"3.5","description":"Cafe Latte with less milk & more foam","size":{"small":"$2.90","medium":"$3.50","large":"$3.75"}},{"menu_id":"8","title":"Cafe Mocha","category":"Hot Drinks","rating":"3.5","description":"espresso, steamed milk & Ghiradelli chocolate, topped with whipped cream","size":{"small":"$3.25","medium":"$3.70","large":"$3.95"}},{"menu_id":"9","title":"White Chocolate Mocha","category":"Hot Drinks","rating":"3.5","description":"espresso, steamed milk & Ghiradelli white chocolate, topped with whipped cream","size":{"small":"$3.35","medium":"$3.95","large":"$4.25"}},{"menu_id":"10","title":"Mexican Mocha","category":"Hot Drinks","rating":"3.5","description":"espresso, steamed milk & Ibara chocolate, topped with whipped cream & cinnamon","size":{"small":"$3.35","medium":"$3.95","large":"$4.25"}},{"menu_id":"11","title":"Breve Latte","category":"Hot Drinks","rating":"3.5","description":"espresso & steamed half & half","size":{"small":"$3.25","medium":"$3.80","large":"$4.20"}},{"menu_id":"12","title":"Hot tea","category":"Coffee Alternative","rating":"3.5","description":"variety of black, gree & herbal teas","size":{"any size":"$1.75"}},{"menu_id":"13","title":"Hot Chocolate","category":"Coffee Alternative","rating":"3.5","description":"Ghiradelli chocoloate & steamed milk, topped with whipped cream","size":{"small":"$2.35","medium":"$2.65","large":"$2.95"}},{"menu_id":"14","title":"Streamer","category":"Coffee Alternative","rating":"3.5","description":"Steamed milk with your choice of flavored syrup","size":{"small":"$2.35","medium":"$2.65","large":"$2.95"}},{"menu_id":"15","title":"Chai Latte","category":"Coffee Alternative","rating":"3.5","description":"Sweet, spicy black tea & steamed milk","size":{"small":"$3.25","medium":"$3.70","large":"$3.95"}},{"menu_id":"16","title":"Iced tea or coffee","category":"On the Rocks","rating":"3.5","description":"","size":{"20 oz Cup":"$1.90"}},{"menu_id":"17","title":"Americano","category":"On the Rocks","rating":"3.5","description":"","size":{"20 oz Cup":"$2.50"}},{"menu_id":"18","title":"Iced latte or cappuccino","category":"On the Rocks","rating":"3.5","description":"","size":{"20 oz Cup":"$3.75"}},{"menu_id":"19","title":"Iced Mocha","category":"On the Rocks","rating":"3.5","description":"","size":{"20 oz Cup":"$3.95"}},{"menu_id":"20","title":"Spice on Ice","category":"On the Rocks","rating":"3.5","description":"Chai Tea Latte","size":{"20 oz Cup":"$3.95"}},{"menu_id":"21","title":"Iced White","category":"On the Rocks","rating":"3.5","description":"White Chocolate Mocha","size":{"20 oz Cup":"$4.25"}}]}'
                        	),   
                ));

	}

}