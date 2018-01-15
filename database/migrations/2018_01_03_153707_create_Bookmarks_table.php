<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Bookmarks', function(Blueprint $table)
		{
			$table->integer('MessagesID')->index('Bookmarks');
			$table->integer('UsersID')->index('FKBookmarks755940');
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
		Schema::drop('Bookmarks');
	}

}
