<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class customerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'id' => '1',
                'name' => 'Nguyễn Văn A',
                'address' => 'Aptech',
                'customerId' => '1'
            ],
            [
                'id' => '2',
                'name' => 'Nguyễn Văn B',
                'address' => 'Aptech',
                'customerId' => '2'
            ],
            [
                'id' => '3',
                'name' => 'Nguyễn Văn C',
                'address' => 'Aptech',
                'customerId' => '3'
            ],
            [
                'id' => '4',
                'name' => 'Nguyễn Văn D',
                'address' => 'Aptech',
                'customerId' => '4'
            ],
            [
                'id' => '5',
                'name' => 'Nguyễn Văn E',
                'address' => 'Aptech',
                'customerId' => '5'
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
