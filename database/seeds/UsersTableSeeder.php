<?php

use Illuminate\Database\Seeder;
use App\Users;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       

        $faker = \Faker\Factory::create();

        $password = Hash::make('toptal');

        Users::create([
            'FirstName' => 'Administrator',
            'LastName' => 'Administrator',
            'Mail' => 'admin@test.com',
            'UserName' => 'Administrator',
            'Password' => $password,
            'BirthDate' => $faker->dateTime,
            'LastConnectionDate' => $faker->dateTime,
            'CreationDate' => $faker->dateTime,
            'CitiesID' => 1,
            'CountriesID' => 1 
        ]);
    }

}
