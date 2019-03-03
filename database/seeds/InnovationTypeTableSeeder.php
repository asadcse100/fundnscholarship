<?php

use Illuminate\Database\Seeder;

class InnovationTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('innovation_types')->insert([
            'name' => 'innovation type 1',
        ]);
        DB::table('innovation_types')->insert([
            'name' => 'innovation type 2',
        ]);
        DB::table('innovation_types')->insert([
            'name' => 'innovation type 3',
        ]);
    }
}
