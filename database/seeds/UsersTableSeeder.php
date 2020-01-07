<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        // \App\User::create([
        //     'name'     => Str::random(20),
        //     'email'    => Str::random(10).'@gmail.com',
        //     'password' => bcrypt('secret')
        // ]);
    // menggunakan FAKER
        $faker  =   Faker::create('en_EN');
        for ($i=1; $i <= 5; $i++) { 
            \App\User::create([
                'name'     => $faker->name,
                'email'    => $faker->email,
                'password' => $faker->password
            ]);
        }

    }
}
