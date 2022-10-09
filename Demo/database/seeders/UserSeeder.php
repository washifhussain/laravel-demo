<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=1; $i<=100; $i++){
            DB::table('users')->insert([
                "name" => $faker->name(),
                "email" => $faker->safeEmail(),
                "phone" => $faker->numerify('98########'),
                'password' => Hash::make('password'),
                'isActive' => $faker->numberBetween(0, 1),
                'created_at' => now(),
            ]);
        }

    }
}
