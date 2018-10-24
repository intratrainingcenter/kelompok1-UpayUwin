<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'nama_ecommerce' => 'dikadika',
                'alamat' => 'jalan',
                'telp' => '0823333',
                'logo' => 'avatar.png',
            ]
        ]);
    }
}
