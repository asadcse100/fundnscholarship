<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('std_class')->insert([
            'name' => 'Class One',
        ]);
       DB::table('std_class')->insert([
            'name' => 'Class Two',
        ]);
       DB::table('std_class')->insert([
            'name' => 'Class Three',
        ]);
       DB::table('std_class')->insert([
            'name' => 'Class Four',
        ]);
       DB::table('std_class')->insert([
            'name' => 'Class Five',
        ]);
       DB::table('std_class')->insert([
            'name' => 'Class Six',
        ]);
       DB::table('std_class')->insert([
            'name' => 'Class Seven',
        ]);
    }
}
