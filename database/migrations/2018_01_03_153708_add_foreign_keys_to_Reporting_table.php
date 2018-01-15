<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReportingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Reporting', function(Blueprint $table)
		{
			$table->foreign('UsersID', 'FKReporting752896')->references('ID')->on('Users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('MessagesID', 'Reporting')->references('ID')->on('Messages')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Reporting', function(Blueprint $table)
		{
			$table->dropForeign('FKReporting752896');
			$table->dropForeign('Reporting');
		});
	}

}
