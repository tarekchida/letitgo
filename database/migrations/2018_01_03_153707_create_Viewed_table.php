<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViewedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Viewed', function(Blueprint $table)
		{
			$table->integer('MessagesID')->index('Viewed');
			$table->integer('UsersID')->index('FKViewed197403');
			$table->dateTime('Date');
			$table->primary(['MessagesID','UsersID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Viewed');
	}

}
