<?php

class LocationsTableSeeder extends Seeder {

	public function run() {
		
			DB::table('locations')->delete();
        		   
                DB::table('locations')->insert(
                        array(
                                array(
                                	"location_name" => "Fairbanks - Warren Lecture Hall",
                                	"id" 			=> 1,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.880970',
                                	"lng"			=> '-117.234419',
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	),   
                               
                                array(
                                	"location_name" => "Fairbanks - Center Hall",
                                	"id" 			=> 2,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.878017',
                                	"lng"			=> '-117.237271',
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	), 

                                array(
                                	"location_name" => "Fairbanks - Hopkins Parking Structure",
                                	"id" 			=> 3,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.883844',
                                	"lng"			=> '-117.240341',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                                	
                                array(
                                	"location_name" => "Fairbanks - BioMedical Building",
                                	"id" 			=> 4,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.876505',
                                	"lng"			=> '-117.237331',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                                	
                                array(
                                	"location_name" => "Fairbanks - Revelle Plaza",
                                	"id" 			=> 5,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.874662',
                                	"lng"			=> '-117.240716',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                                	
                                array(
                                	"location_name" => "Art of Espresso - Mandeville",
                                	"id" 			=> 6,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.877567',
                                	"lng"			=> '-117.239254',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 2,
                                	) 
                                	
                                array(
                                	"location_name" => "Perks - Bookstore",
                                	"id" 			=> 7,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.87928',
                                	"lng"			=> '-117.236752',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 3,
                                	) 
                                	
                                array(
                                	"location_name" => "Cups - Engineering Complex",
                                	"id" 			=> 8,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.882118',
                                	"lng"			=> '-117.234745',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 4,
                                	) 
                                	
                        ));

	}

}
