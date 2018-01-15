<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Users', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('FirstName');
			$table->string('LastName');
			$table->string('Mail');
			$table->string('UserName');
			$table->string('Password');
			$table->dateTime('BirthDate');
			$table->dateTime('LastConnectionDate');
			$table->dateTime('CreationDate');
			$table->string('Avatar');
			$table->integer('CitiesID')->index('FKUsers598857');
			$table->integer('CountriesID')->index('FKUsers293537');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Users');
	}

}
