<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Whisky'
        ]);
        
        DB::table('category')->insert([
            'name' => 'Vodka'
        ]);

        DB::table('category')->insert([
            'name' => 'Gin'
        ]);

        DB::table('category')->insert([
            'name' => 'Wine'
        ]);
    }
}
