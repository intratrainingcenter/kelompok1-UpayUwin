<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart')->insert([
            [
                'id_user' => '1',
                'voucher_code' => 'PUBG1',
                'type' => 'Gemscool',
                'qty' => '10',
                'nominal' => '2',
            ],
            [
                'id_user' => '1',
                'voucher_code' => 'PUBG2',
                'type' => 'Garena',
                'qty' => '1',
                'nominal' => '3',
            ],
            [
                'id_user' => '2',
                'voucher_code' => 'ML1',
                'type' => 'Garena',
                'qty' => '1',
                'nominal' => '1',
            ]
        ]);
    }
}
