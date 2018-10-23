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
            'voucher_code' => '1234-4567-8900-1480',
            'type' => 'Gemscool',
            'qty' => '10',
            'nominal' => '100000',
            ],
            [
                'id_user' => '1',
                'voucher_code' => '1234-4567-8900-1480',
                'type' => 'Garena',
                'qty' => '1',
                'nominal' => '100000',
                ],
                [
                    'id_user' => '2',
                    'voucher_code' => '1234-4567-8900-1480',
                    'type' => 'Garena',
                    'qty' => '1',
                    'nominal' => '100000',
                    ]
        ]);
    }
}
