<?php

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
            [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('1234'),
            'level' => 'user',
            'status' => 'logout',
            ],
            [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'level' => 'admin',
            'status' => 'logout',

            ]
        ]);
    }
}
