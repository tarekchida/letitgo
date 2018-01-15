<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Cities', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('Name')->index('Name');
			$table->integer('CountriesID')->index('FKCities365168');
			$table->integer('Code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Cities');
	}

}
