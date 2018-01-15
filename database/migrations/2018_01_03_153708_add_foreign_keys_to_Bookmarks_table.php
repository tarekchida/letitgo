<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Bookmarks', function(Blueprint $table)
		{
			$table->foreign('UsersID', 'FKBookmarks755940')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('MessagesID', 'Bookmarks')->references('ID')->on('Messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Bookmarks', function(Blueprint $table)
		{
			$table->dropForeign('FKBookmarks755940');
			$table->dropForeign('Bookmarks');
		});
	}

}
