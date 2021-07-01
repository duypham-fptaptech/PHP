<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => '1',
                'price' => '1000',
                'name' => 'Siêu nhân A',
                'productId' => '1'
            ],
            [
                'id' => '2',
                'price' => '1000',
                'name' => 'Siêu nhân B',
                 'productId' => '2'
            ],
            [
                'id' => '3',
                'price' => '1000',
                'name' => 'Siêu nhân C',
                'productId' => '3'
            ],
            [
                'id' => '4',
                'price' => '1000',
                'name' => 'Siêu nhân D',
                'productId' => '4'
            ],
            [
                'id' => '5',
                'price' => '1000',
                'name' => 'Siêu nhân E',
                'productId' => '5'
            ],
            [
                'id' => '6',
                'price' => '1000',
                'name' => 'Siêu nhân F',
                'productId' => '1'
            ],
            [
                'id' => '7',
                'price' => '1000',
                'name' => 'Siêu nhân G',
                'productId' => '2'
            ],
            [
                'id' => '8',
                'price' => '1000',
                'name' => 'Siêu nhân X',
                'productId' => '3'
            ],
            [
                'id' => '9',
                'price' => '1000',
                'name' => 'Siêu nhân Y',
                'productId' => '4'
            ],
            [
                'id' => '10',
                'price' => '1000',
                'name' => 'Siêu nhân Z',
                'productId' => '5'
            ]

        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
