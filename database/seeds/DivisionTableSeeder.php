<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('division')->insert([
            'name' => 'Dhaka',
        ]);
       DB::table('division')->insert([
            'name' => 'Rajshai',
        ]);
       DB::table('division')->insert([
            'name' => 'Kulna',
        ]);
       DB::table('division')->insert([
            'name' => 'Rangpur',
        ]);
       DB::table('division')->insert([
            'name' => 'Comilla',
        ]);
       DB::table('division')->insert([
            'name' => 'Borishal',
        ]);
       DB::table('division')->insert([
            'name' => 'Selht',
        ]);
    }
}
