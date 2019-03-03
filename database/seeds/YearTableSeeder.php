<?php

use Illuminate\Database\Seeder;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('std_class_year')->insert([
            'year' => '2000',
        ]);
       DB::table('std_class_year')->insert([
            'year' => '2001',
        ]);
       DB::table('std_class_year')->insert([
            'year' => '2002',
        ]);
       DB::table('std_class_year')->insert([
            'year' => '2003',
        ]);
       DB::table('std_class_year')->insert([
            'year' => '2004',
        ]);
       DB::table('std_class_year')->insert([
            'year' => '2005',
        ]);
       DB::table('std_class_year')->insert([
            'year' => '2006',
        ]);
    }
}
