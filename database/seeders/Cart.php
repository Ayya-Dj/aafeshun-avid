<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cart extends Seeder
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
                'product'   => '1',
                'quantity'  => 12,
            ],
            [
                'product'   => '2',
                'quantity'  => 12,
            ],
        ]);
    }
}
