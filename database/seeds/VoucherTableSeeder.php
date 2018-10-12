<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voucher_games')->insert([
            [
                'kode_voucher' => 'ML1',
                'nama_voucher' => '200 Diamond',
                'kode_kategori' => '1',
                'harga_voucher' => 50000 ,
                'masa_aktif' => Carbon::now()->addDays(30) ,
                'status' => 'Aktif' ,
                'created_at' => Carbon::now() ,
            ],
            [
                'kode_voucher' => 'ML2',
                'nama_voucher' => '500 Diamond',
                'kode_kategori' => '1',
                'harga_voucher' => 100000,
                'masa_aktif' => Carbon::now()->addDays(30),
                'status' => 'Aktif',
                'created_at' => Carbon::now(),
            ],
            [
                'kode_voucher' => 'PUBG1',
                'nama_voucher' => 'PUBG 200 UC',
                'kode_kategori' => '2',
                'harga_voucher' => 50000,
                'masa_aktif' => Carbon::now()->addDays(30),
                'status' => 'Aktif',
                'created_at' => Carbon::now(),

            ],
            [
                'kode_voucher' => 'PUBG2',
                'nama_voucher' => 'PUBG 500 UC',
                'kode_kategori' => '2',
                'harga_voucher' => 100000,
                'masa_aktif' => Carbon::now()->addDays(30),
                'status' => 'Aktif',
                'created_at' => Carbon::now(),

            ]
        ]);
    }
}
