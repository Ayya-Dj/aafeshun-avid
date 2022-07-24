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
                'description'   => 'Safety equipment used on construction site.',
                'image'         => 'hat.jpg',
                'price'         => 60.20,
            ],
            [
                'name'          => 'Plywood',
                'description'   => 'Plywood 4x10',
                'image'         => 'plywood.jpg',
                'price'         => 140.00,
            ],
            [
                'name'          => 'Tape Measure',
                'description'   => 'Industrial grade tape measure',
                'image'         => 'tape-measure.jpg',
                'price'         => 100.00,
            ],
        ]);
    }
}
