<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            'name' => "Masum",
            'email' => 'masum@gmail.com',
            'password' => Hash::make('password'),
            'role' =>'1',

        ]);
        DB::table('users')->insert([
            'name' => "Ikbal",
            'email' => 'ikbal@gmail.com',
            'password' => Hash::make('password'),
            'role' =>'2',

        ]);
        DB::table('users')->insert([
            'name' => "Mizan",
            'email' => 'mizan@gmail.com',
            'password' => Hash::make('password'),
            'role' =>'3',

        ]);
    }
}
