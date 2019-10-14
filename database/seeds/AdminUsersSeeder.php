<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'email' => 'custom@gmail.com',
            'password' => bcrypt('admin'),
            'api_token' => Str::random(60),
            'remember_token' => Str::random(10),
        ]);
    }
}
