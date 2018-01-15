<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDisLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DisLikes', function(Blueprint $table)
		{
			$table->foreign('UsersID', 'FKDisLikes520045')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('MessagesID', 'DisLikes')->references('ID')->on('Messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('DisLikes', function(Blueprint $table)
		{
			$table->dropForeign('FKDisLikes520045');
			$table->dropForeign('DisLikes');
		});
	}

}
