<?php

use Illuminate\Database\Seeder;

class GymsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20 ;
        for ($i = 0; $i < $limit; $i++) {
        	DB::table('gyms')->insert([ //,
            'gymName'=> $faker->word
            ,'gymAddress' => $faker->address
            ,'gymContact' => $faker->phoneNumber
            ,'gymDescritption' => $faker->sentence
            ,'price' => $faker->randomNumber($nbDigits = 2)
			]);
		}
    }
}
