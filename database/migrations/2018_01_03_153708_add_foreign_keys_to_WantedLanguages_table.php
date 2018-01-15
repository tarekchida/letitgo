<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWantedLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('WantedLanguages', function(Blueprint $table)
		{
			$table->foreign('LanguagesID', 'FKwantedLang318904')->references('ID')->on('Languages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('UsersID', 'UserLanguages')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('WantedLanguages', function(Blueprint $table)
		{
			$table->dropForeign('FKwantedLang318904');
			$table->dropForeign('UserLanguages');
		});
	}

}
