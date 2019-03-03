<?php

use Illuminate\Database\Seeder;

class WelfareTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('welfar_types')->insert([
            'name' => 'welfare type 1',
        ]);
        DB::table('welfar_types')->insert([
            'name' => 'welfare type 2',
        ]);
        DB::table('welfar_types')->insert([
            'name' => 'welfare type 3',
        ]);
        DB::table('welfar_types')->insert([
            'name' => 'welfare type 4',
        ]);
    }
}
