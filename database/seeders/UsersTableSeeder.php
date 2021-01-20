<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'login' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('manager'),
            'role' => 2,
        ]);
    }
}
