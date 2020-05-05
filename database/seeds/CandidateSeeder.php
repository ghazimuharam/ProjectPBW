<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <=10; $i++){

            DB::table('candidatems')->insert([
                'nama' => $faker->name,
                'foto' => '',
                'bio' => $faker->address,
                'total_vote' => '0',
            
            ]);  

        }
    }
}
