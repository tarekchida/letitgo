<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Likes', function(Blueprint $table)
		{
			$table->foreign('UsersID', 'FKLikes542952')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('MessagesID', 'Likes')->references('ID')->on('Messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Likes', function(Blueprint $table)
		{
			$table->dropForeign('FKLikes542952');
			$table->dropForeign('Likes');
		});
	}

}
