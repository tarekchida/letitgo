<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsedLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('UsedLanguages', function(Blueprint $table)
		{
			$table->foreign('LanguagesID', 'FKUsedLangua85892')->references('ID')->on('Languages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('UsersID', 'FKUsedLangua112238')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('UsedLanguages', function(Blueprint $table)
		{
			$table->dropForeign('FKUsedLangua85892');
			$table->dropForeign('FKUsedLangua112238');
		});
	}

}
