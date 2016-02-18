<?php

use Illuminate\Database\Seeder;
use App\Story;
class StoriesTableSeeder extends Seeder
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
        	DB::table('stories')->insert([ //,
        		'title' => $faker->sentence,
        		'story' => $faker->realText($faker->numberBetween(100,200)),
        		'published' => $faker->boolean($chanceOfGettingTrue = 50),
        		]);
        }
    }
}
