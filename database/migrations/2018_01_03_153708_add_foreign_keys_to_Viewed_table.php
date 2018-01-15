<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToViewedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Viewed', function(Blueprint $table)
		{
			$table->foreign('UsersID', 'FKViewed197403')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('MessagesID', 'Viewed')->references('ID')->on('Messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Viewed', function(Blueprint $table)
		{
			$table->dropForeign('FKViewed197403');
			$table->dropForeign('Viewed');
		});
	}

}
