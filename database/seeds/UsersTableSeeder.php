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
            'password' => '81dc9bdb52d04dc20036dbd8313ed055',
            'saldo' => '0',
            'level' => 'user',
            'status' => 'logout',
            ],
            [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '81dc9bdb52d04dc20036dbd8313ed055',
            'saldo' => '0',
            'level' => 'admin',
            'status' => 'logout',

            ]
        ]);
    }
}
