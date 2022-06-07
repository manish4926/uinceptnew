<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'superadmin',
            'lastname' => '',
            'email' => 'manish.arora4926@gmail.com',
            'mobile' => '9999393712',
            'status' => 1,
            'password' => Hash::make('superpassword'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Manish',
            'lastname' => 'Arora',
            'email' => 'manish.arora@jimsindia.org',
            'mobile' => '9999393712',
            'status' => 1,
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'firstname' => 'Akansha',
            'lastname' => 'Bhargava',
            'email' => 'akansha.bhargava@jimsindia.org',
            'mobile' => '9999393712',
            'status' => 1,
            'password' => Hash::make('123456'),
        ]);
    }
}
