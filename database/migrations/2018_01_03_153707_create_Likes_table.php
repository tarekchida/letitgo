<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Likes', function(Blueprint $table)
		{
			$table->integer('MessagesID')->index('Likes');
			$table->integer('UsersID')->index('FKLikes542952');
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
		Schema::drop('Likes');
	}

}
