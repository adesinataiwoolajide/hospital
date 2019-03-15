<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,2) as $index) {
	        DB::table('users')->insert([
	            'name' => 'Adesina Taiwo Olajide',
                'email' => $faker->email,
                'is_admin' => 1,
                'email_verified_at' =>  date('m-d-y'),
                'password' => bcrypt('secret'),
                'updated_at' => date('m-d-y'),
                'created_at' => date('m-d-y'),
	        ]);
	}
    } 
}
