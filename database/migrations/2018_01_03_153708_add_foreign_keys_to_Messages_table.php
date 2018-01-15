<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Messages', function(Blueprint $table)
		{
			$table->foreign('MessageTypeID', 'FKMessages603811')->references('ID')->on('MessageType')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('UsersID', 'FKMessages118180')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Messages', function(Blueprint $table)
		{
			$table->dropForeign('FKMessages603811');
			$table->dropForeign('FKMessages118180');
		});
	}

}
