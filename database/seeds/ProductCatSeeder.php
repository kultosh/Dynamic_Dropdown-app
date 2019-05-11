<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_cat')->insert([
            'product_cat_name' => 'Clothes'
        ]);
        
        DB::table('product_cat')->insert([
            'product_cat_name' => 'Food'
        ]);

        DB::table('product_cat')->insert([
            'product_cat_name' => 'Furniture'
        ]);
    }
}
