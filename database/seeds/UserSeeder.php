<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <=5; $i++){
            DB::table('users')->insert([
                'uniquecode' => Str::random(8),
                'status' => 'active',
            ]);
        }
    }
}
