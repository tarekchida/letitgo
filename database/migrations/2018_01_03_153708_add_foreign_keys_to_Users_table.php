<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Users', function(Blueprint $table)
		{
			$table->foreign('CitiesID', 'FKUsers598857')->references('ID')->on('Cities')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('CountriesID', 'FKUsers293537')->references('ID')->on('Countries')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Users', function(Blueprint $table)
		{
			$table->dropForeign('FKUsers598857');
			$table->dropForeign('FKUsers293537');
		});
	}

}
