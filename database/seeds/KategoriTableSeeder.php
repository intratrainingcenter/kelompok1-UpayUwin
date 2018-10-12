<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('kategoris')->insert([
            [
                'kode_kategori' => '1',
                'nama_kategori' => 'Mobile Legends',
                'created_at' => Carbon::now(),
            ],
            [
                'kode_kategori' => '2',
                'nama_kategori' => 'PUBG',
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
