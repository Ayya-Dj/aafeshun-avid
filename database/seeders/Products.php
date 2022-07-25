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
                'price'         => 60.00,
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
            [
                'name'          => 'Bricks',
                'description'   => 'Concrete bricks',
                'image'         => 'bricks.jpg',
                'price'         => 25.00,
            ],
            [
                'name'          => 'Hammer',
                'description'   => 'Industrial grade hammer',
                'image'         => 'hammer.jpg',
                'price'         => 50.00,
            ],
            [
                'name'          => 'Gloves',
                'description'   => 'Construction gloves',
                'image'         => 'gloves.jpg',
                'price'         => 15.00,
            ],
            [
                'name'          => 'Ladder',
                'description'   => '4 step ladder',
                'image'         => 'ladder.jpg',
                'price'         => 100.00,
            ],
            [
                'name'          => 'Spirit Level',
                'description'   => 'Used to level things',
                'image'         => 'level.jpg',
                'price'         => 200.00,
            ],
            [
                'name'          => 'Trowel',
                'description'   => 'Used to mix and apply cement',
                'image'         => 'trowel.jpeg',
                'price'         => 75.00,
            ],
            [
                'name'          => 'Wheel Barrow',
                'description'   => 'Used to carry things',
                'image'         => 'wheelbarrow.jpg',
                'price'         => 200.00,
            ],
        ]);
    }
}
