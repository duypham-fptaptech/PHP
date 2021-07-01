<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class orderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id' => '1',
                'orderId' => '1',
                'customerId' => '1',
            ],
            [
                'id' => '2',
                'orderId' => '2',
                'customerId' => '1'
            ],
            [
                'id' => '3',
                'orderId' => '3',
                'customerId' => '2'
            ],
            [
                'id' => '4',
                'orderId' => '4',
                'customerId' => '2'
            ],
            [
                'id' => '5',
                'orderId' => '5',
                'customerId' => '3'
            ], [
                'id' => '6',
                'orderId' => '6',
                'customerId' => '3'
            ],
            [
                'id' => '7',
                'orderId' => '7',
                'customerId' => '4'
            ],
            [
                'id' => '8',
                'orderId' => '8',
                'customerId' => '4'
            ],
            [
                'id' => '9',
                'orderId' => '9',
                'customerId' => '5'
            ],
            [
                'id' => '10',
                'orderId' => '10',
                'customerId' => '5'
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
