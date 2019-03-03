<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UsersTableSeeder::class,        
        ClassTableSeeder::class,        
        YearTableSeeder::class,        
        DivisionTableSeeder::class,        
        DistrictTableSeeder::class,        
        InnovationTypeTableSeeder::class,        
        WelfareTypeTableSeeder::class,        
        MinistyTableSeeder::class,        
    ]);
    }
}
