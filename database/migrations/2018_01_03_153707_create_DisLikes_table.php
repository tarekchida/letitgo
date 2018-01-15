<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('DisLikes', function(Blueprint $table)
		{
			$table->integer('MessagesID')->index('DisLikes');
			$table->integer('UsersID')->index('FKDisLikes520045');
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
		Schema::drop('DisLikes');
	}

}
