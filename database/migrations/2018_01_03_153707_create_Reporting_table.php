<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Reporting', function(Blueprint $table)
		{
			$table->integer('MessagesID')->index('Reporting');
			$table->integer('UsersID')->index('FKReporting752896');
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
		Schema::drop('Reporting');
	}

}
