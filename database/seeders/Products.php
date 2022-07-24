<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'          => 'Construction Hat',
                'description'   => 'Lorem ipsum dolor sit amet',
                'image'         => 'hat.jpg',
                'price'         => 12.22,
            ],
            [
                'name'          => 'Not Hat',
                'description'   => 'Lorem ipsum dolor sit amet',
                'image'         => '2.jpg',
                'price'         => 12.22,
            ],
        ]);
    }
}
