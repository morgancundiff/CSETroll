<?php

class LocationsTableSeeder extends Seeder {

	public function run() {
		
			DB::table('locations')->delete();
        		   
                DB::table('locations')->insert(
                        array(
                                array(
                                	"location_name" => "Fairbanks Warren Lecture Hall",
                                	"id" 			=> 1,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.880970',
                                	"lng"			=> '-117.234419',
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	),   
                               
                                array(
                                	"location_name" => "Fairbanks Center Hall",
                                	"id" 			=> 2,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> '32.878017',
                                	"lng"			=> '-117.237271',
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	), 

                                array(
                                	"location_name" => "Fairbanks Hopkins Parking Structure",
                                	"id" 			=> 3,
                                	"address" 		=> "123 Fake address",
                                	"lat" 			=> 32.883844,
                                	"lng"			=> -117.240341,                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                        ));

	}

}