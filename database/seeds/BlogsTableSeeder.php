<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 5; $i++) { 
            DB::table('blogs')->insert([
                'title' => $faker->sentence(rand(2, 4)),
                'description' => $faker->text(rand(100, 200))
            ]);
        }
    }
}
