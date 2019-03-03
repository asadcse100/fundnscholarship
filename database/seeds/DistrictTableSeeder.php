<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('district')->insert([
            'name' => 'Bagatipara',
        ]);
       DB::table('district')->insert([
            'name' => 'Lalpur',
        ]);
       DB::table('district')->insert([
            'name' => 'Singra',
        ]);
       DB::table('district')->insert([
            'name' => 'Tangail',
        ]);

    }
}
