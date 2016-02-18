<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
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
        	DB::table('tags')->insert([ //,
        		'value' => $faker->word,
        		]);
        }
    }
}
