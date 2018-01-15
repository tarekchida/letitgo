<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWantedLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('WantedLanguages', function(Blueprint $table)
		{
			$table->integer('UsersID')->index('UserLanguages');
			$table->integer('LanguagesID')->index('FKwantedLang318904');
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
		Schema::drop('WantedLanguages');
	}

}
