<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        	'id' => 1,
        	'name' => 'admin',
        	'surname' => 'admin',
        	'email' => 'admin123@gmail.com',
        	'password' => Hash::make('1234'),
        	'czy_admin' => 1,
            'remember_token' => Str::random(40),
        ]);
    }
}
