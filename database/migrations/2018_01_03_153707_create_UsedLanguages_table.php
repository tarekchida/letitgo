<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsedLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('UsedLanguages', function(Blueprint $table)
		{
			$table->integer('UsersID')->index('FKUsedLangua112238');
			$table->integer('LanguagesID')->index('FKUsedLangua85892');
			$table->dateTime('Date');
			$table->primary(['UsersID','LanguagesID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('UsedLanguages');
	}

}
