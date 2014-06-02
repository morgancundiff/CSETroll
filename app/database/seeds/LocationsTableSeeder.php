<?php

class LocationsTableSeeder extends Seeder {


	/* Populate the database with the locations of the known coffee shops.
	 * Each array has name, id number, address, latitude, longitude, hours, and menu associated with the item.
	 */
	public function run() {
		
			DB::table('locations')->delete();
        		   
                DB::table('locations')->insert(
                	//Dynamically create an array of shop arrays
                        array(
                        	//Dynamically create an array with a single shop's information: Fairbanks Warren
                                array(
                                	"location_name" => "Fairbanks - Warren Lecture Hall",
                                	"id" 			=> 1,
                                	"address" 		=> "Voigt Drive, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.880970',
                                	"lng"			=> '-117.234419',
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	),   
                                	
                                //Dynamically create an array with a single shop's information: Fairbanks Center
                                array(
                                	"location_name" => "Fairbanks - Center Hall",
                                	"id" 			=> 2,
                                	"address" 		=> "Gilman Drive, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.878017',
                                	"lng"			=> '-117.237271',
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	), 
				
				//Dynamically create an array with a single shop's information: Fairbanks Hopkins
                                array(
                                	"location_name" => "Fairbanks - Hopkins Parking Structure",
                                	"id" 			=> 3,
                                	"address" 		=> "Hopkins Drive, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.883844',
                                	"lng"			=> '-117.240341',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                                	
                                //Dynamically create an array with a single shop's information: Fairbanks BioMed
                                array(
                                	"location_name" => "Fairbanks - BioMedical Building",
                                	"id" 			=> 4,
                                	"address" 		=> "Gilman Drive, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.876505',
                                	"lng"			=> '-117.237331',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                                
                                //Dynamically create an array with a single shop's information: Fairbanks Revelle
                                array(
                                	"location_name" => "Fairbanks - Revelle Plaza",
                                	"id" 			=> 5,
                                	"address" 		=> "Scholars Drive South, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.874662',
                                	"lng"			=> '-117.240716',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 1,
                                	) 
                                	
                                //Dynamically create an array with a single shop's information: Art of Espresso
                                array(
                                	"location_name" => "Art of Espresso - Mandeville",
                                	"id" 			=> 6,
                                	"address" 		=> "Mandeville Lane, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.877567',
                                	"lng"			=> '-117.239254',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 2,
                                	) 
                                	
                                //Dynamically create an array with a single shop's information: Perks
                                array(
                                	"location_name" => "Perks - Bookstore",
                                	"id" 			=> 7,
                                	"address" 		=> "Matthews Lane, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.87928',
                                	"lng"			=> '-117.236752',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 3,
                                	) 
                                	
                                //Dynamically create an array with a single shop's information: Cups
                                array(
                                	"location_name" => "Cups - Engineering Complex",
                                	"id" 			=> 8,
                                	"address" 		=> "Voigt Drive, University of California - San Diego, San Diego, CA 92161, USA",
                                	"lat" 			=> '32.882118',
                                	"lng"			=> '-117.234745',                              	
                                	"hours"			=> '{"hours":{"open":{"Sunday":"closed","Monday":"7:00am","Tuesday":"7:00am","Wednesday":"7:00am","Thursday":"7:00am","Friday":"7:00am","Saturday":"closed"},"close":{"Sunday":"closed","Monday":"5:00pm","Tuesday":"5:00pm","Wednesday":"5:00pm","Thursday":"5:00pm","Friday":"5:00pm","Saturday":"closed"}}}',
                                	"menus_id"		=> 4,
                                	) 
                                	
                        ));

	}

}
