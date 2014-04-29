<?php

class SentryUserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		Sentry::getUserProvider()->create(array(
	        'email'    => 'grimfieldlongfellow@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'arturo',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'ahos2005@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'ahmed',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'allengong123@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'allen',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'alexrosengarten@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'alex',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'shalomabitan@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'joel',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'jonathanchilders65@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'jonathan',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'jfhwang@ucsd.edu',
	        'password' => 'CSE110Project',
	        'username' => 'john',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'khc010@ucsd.edu',
	        'password' => 'CSE110Project',
	        'username' => 'kevin',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'mcundiff@ucsd.edu',
	        'password' => 'CSE110Project',
	        'username' => 'morgan',
	        'activated' => 1,
	    ));

	    Sentry::getUserProvider()->create(array(
	        'email'    => 'pitkinsa@gmail.com',
	        'password' => 'CSE110Project',
	        'username' => 'sachi',
	        'activated' => 1,
	    ));

	}

}