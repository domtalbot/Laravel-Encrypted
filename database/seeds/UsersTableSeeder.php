<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'blood_type' => 'This is my blood type',
            'medical_conditions' => 'These are my medical conditions',
            'allergies' => 'These are my allergies'
        ]);
    }
}
