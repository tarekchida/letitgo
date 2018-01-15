<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Messages', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('MessageTypeID')->index('FKMessages603811');
			$table->integer('UsersID')->index('FKMessages118180');
			$table->string('ChainId');
			$table->dateTime('Date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Messages');
	}

}
