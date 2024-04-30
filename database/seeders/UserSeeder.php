<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\User;

// Helpers 
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //azzero la table user
        Schema::disableForeignKeyConstraints();
        user::truncate();
        Schema::enableForeignKeyConstraints();

        for ($i=0; $i < 20; $i++) { 
           
            $user = user::create([
                'firstname' => fake()->firstName(),
                'lastname' => fake()->lastName(),
                'email'=> fake()->email,
                'password'=> 'password',
                'age'=>fake()->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
                'address'=> Faker::create('it_IT')->address(),
                'image'=> null,
                'tag'=> fake()->randomNumber(5, false),
            ]);
        }

    }
}
