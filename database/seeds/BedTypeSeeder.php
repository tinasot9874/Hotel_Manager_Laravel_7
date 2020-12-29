<?php

use Illuminate\Database\Seeder;

class BedTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bed_types')->insert([
            'name' => 'Single Bed',
            'slug' => 'single-bed'
        ]);
        DB::table('bed_types')->insert([
            'name' => 'Twin Bed',
            'slug' => 'twin-bed'
        ]);
        DB::table('bed_types')->insert([
            'name' => 'Triple Bed',
            'slug' => 'triple-bed'
        ]);
        DB::table('bed_types')->insert([
            'name' => 'Double Bed',
            'slug' => 'double-bed'
        ]);
        DB::table('bed_types')->insert([
            'name' => 'Queen Size Bed',
            'slug' => 'queen-size-bed'
        ]);
        DB::table('bed_types')->insert([
            'name' => 'King Size Bed',
            'slug' => 'king-size-bed'
        ]);
    }
}
