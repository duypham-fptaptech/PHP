<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class orderDetailSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('order_details')->truncate();
        \Illuminate\Support\Facades\DB::table('order_details')->insert([
            [
                'orderId' => '1',
                'productId' => '1',
                'quantity' => '4',
                'amount' => '4'
            ],
            [
                'orderId' => '2',
                'productId' => '1',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '3',
                'productId' => '2',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '4',
                'productId' => '2',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '5',
                'productId' => '3',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '6',
                'productId' => '3',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '7',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '8',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '9',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '10',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '11',
                'productId' => '1',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '12',
                'productId' => '1',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '13',
                'productId' => '2',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '14',
                'productId' => '3',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '15',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '16',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '17',
                'productId' => '6',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '18',
                'productId' => '1',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '19',
                'productId' => '2',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '20',
                'productId' => '3',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '21',
                'productId' => '3',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '22',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '23',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '24',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '25',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '26',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '27',
                'productId' => '4',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '28',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '29',
                'productId' => '5',
                'quantity' => '4',
                'amount' => '4'
            ],            [
                'orderId' => '30',
                'productId' => '2',
                'quantity' => '4',
                'amount' => '4'
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
