<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i=1;$i<=15;$i++){
            //insert data to table articles
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'content' => $faker->text,
                'created_at' => Carbon::now()
            ]);
        }
    }
}
