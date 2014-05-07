<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table) {
			
			$table->increments('id');
			$table->string('location_name');
			$table->string('address');
			$table->float('lat', 10, 6);
			$table->float('lng', 10 ,6);
			$table->text('hours');
			$table->integer('menus_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
