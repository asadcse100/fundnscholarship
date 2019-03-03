<?php

use Illuminate\Database\Seeder;

class MinistyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ministys')->insert([
            'name' => 'ministys 1',
        ]);
        DB::table('ministys')->insert([
            'name' => 'ministys 2',
        ]);
        DB::table('ministys')->insert([
            'name' => 'ministys 3',
        ]);    }
}
