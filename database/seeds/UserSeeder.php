<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

    public function run() {

        $faker = Faker\Factory::create('nl_NL');

        for ($i = 0; $i <50; $i++) {
            App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('secret'),

            ]);
        }

    }

}
