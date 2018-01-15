<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Cities', function(Blueprint $table)
		{
			$table->foreign('CountriesID', 'FKCities365168')->references('ID')->on('Countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Cities', function(Blueprint $table)
		{
			$table->dropForeign('FKCities365168');
		});
	}

}
