<?php

use Illuminate\Database\Seeder;

class DietProgramsTableSeeder extends Seeder
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
        	DB::table('diet_programs')->insert([ //,
            'DPName' => $faker->word
            ,'DPImpact' => $faker->word
            ,'DPDescritption' => $faker->word
            ,'DPSection' => $faker->randomNumber($nbDigits = 2)
            ,'DPLength' => $faker->randomNumber($nbDigits = 2)
            ,'DPCalMax' => $faker->randomNumber($nbDigits = 2)
            ,'DPCalAvg' => $faker->randomNumber($nbDigits = 2)
            ,'DPProteinAvg' => $faker->randomNumber($nbDigits = 4)
            ,'DPFiberAvg' => $faker->randomNumber($nbDigits = 2)
            ,'DPSugarMax' => $faker->randomNumber($nbDigits = 2)
            ,'DPFatMax' => $faker->randomNumber($nbDigits = 2)
			]);
		}
    }
}
