<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productname' => 'Shirt',
        	'qty' => '24',
        	'price' => '134',
        	'prod_cat_id' => 1
        ]);

        DB::table('products')->insert([
            'productname' => 'Skirt',
        	'qty' => '25',
        	'price' => '200',
        	'prod_cat_id' => 1
        ]);

        DB::table('products')->insert([
            'productname' => 'Pant',
        	'qty' => '26',
        	'price' => '130',
        	'prod_cat_id' => 1
        ]);

        DB::table('products')->insert([
            'productname' => 'KFC',
        	'qty' => '230',
        	'price' => '300',
        	'prod_cat_id' => 2
        ]);

        DB::table('products')->insert([
            'productname' => 'MOMO',
        	'qty' => '233',
        	'price' => '100',
        	'prod_cat_id' => 2
        ]);

        DB::table('products')->insert([
            'productname' => 'Pizza',
        	'qty' => '234',
        	'price' => '200',
        	'prod_cat_id' => 2
        ]);

        DB::table('products')->insert([
            'productname' => 'Table',
        	'qty' => '123',
        	'price' => '2000',
        	'prod_cat_id' => 3
        ]);

        DB::table('products')->insert([
            'productname' => 'Bed',
        	'qty' => '124',
        	'price' => '10000',
        	'prod_cat_id' => 3
        ]);
    }
}
