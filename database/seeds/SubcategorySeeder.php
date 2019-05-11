<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategory')->insert([
            'name' => 'Regular Whisky',
            'category_id' => 1
        ]);

         DB::table('subcategory')->insert([
            'name' => 'Premium Whisky',
            'category_id' => 1
        ]);

         DB::table('subcategory')->insert([
            'name' => 'Bourbon Whisky',
            'category_id' => 1
        ]);
        
         DB::table('subcategory')->insert([
            'name' => 'Malt Whisky',
            'category_id' => 1
        ]);

         DB::table('subcategory')->insert([
            'name' => 'Domestic Whisky',
            'category_id' => 1
        ]);

         DB::table('subcategory')->insert([
            'name' => 'Regular Vodka',
            'category_id' => 2
        ]); 
        
        DB::table('subcategory')->insert([
            'name' => 'Premium Vodka',
            'category_id' => 2
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Domestic Vodka',
            'category_id' => 2
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Imported Gin',
            'category_id' => 3
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Domestic Gin',
            'category_id' => 3
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Red Wine',
            'category_id' => 4
        ]);

        DB::table('subcategory')->insert([
            'name' => 'White Wine',
            'category_id' => 4
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Sparkling Wine',
            'category_id' => 4
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Prosecco Wine',
            'category_id' => 4
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Champagne Wine',
            'category_id' => 4
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Flavoured Wine',
            'category_id' => 4
        ]);

        DB::table('subcategory')->insert([
            'name' => 'Wine',
            'category_id' => 4
        ]);
    }
}
