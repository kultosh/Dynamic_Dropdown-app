<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LiquarProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('liquarproduct')->insert([
            'product_name' => 'Dewars White Label 1L',
            'brand' => 'Dewars',
            'country' => 'Nepal',
            'subcategory_id' => 1
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Jameson 1L',
            'brand' => 'Jameson',
            'country' => 'Nepal',
            'subcategory_id' => 1
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Teachers 1L',
            'brand' => 'Teachers',
            'country' => 'Nepal',
            'subcategory_id' => 2
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Ballantines Finest 1L',
            'brand' => 'Ballantines',
            'country' => 'Nepal',
            'subcategory_id' => 3
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => '100 Pipers 750ML',
            'brand' => 'Pipers',
            'country' => 'Nepal',
            'subcategory_id' => 3
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Absolut Blue 1L',
            'brand' => 'Absolut',
            'country' => 'China',
            'subcategory_id' => 6
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Smirnoff Red 1L',
            'brand' => 'Smirnoff',
            'country' => 'China',
            'subcategory_id' => 6
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Fashion Vodka Premium Collection 1L',
            'brand' => 'Fashion',
            'country' => 'China',
            'subcategory_id' => 7
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Ruslan Ultra 750ML',
            'brand' => 'Ruslan',
            'country' => 'Australia',
            'subcategory_id' => 8
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Excellence 750ML',
            'brand' => 'Excellence',
            'country' => 'Australia',
            'subcategory_id' => 8
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Bombay Sapphire 1L',
            'brand' => 'Bombay',
            'country' => 'India',
            'subcategory_id' => 10
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Beefeater 1L',
            'brand' => 'Beefeater',
            'country' => 'India',
            'subcategory_id' => 10
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Hendricks Gin 700ML',
            'brand' => 'Hendricks',
            'country' => 'Italy',
            'subcategory_id' => 10
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Bacardi Black 750ML',
            'brand' => 'Bacardi',
            'country' => 'Italy',
            'subcategory_id' => 9
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Khukri XXX Rum 750ML',
            'brand' => 'Khukri',
            'country' => 'Nepal',
            'subcategory_id' => 9
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Campo Viejo Rioja Reserva 750ML',
            'brand' => 'Campo',
            'country' => 'Spain',
            'subcategory_id' => 11
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Bottega Amarone Della Valpolicella DOCG 750ML',
            'brand' => 'Bottega',
            'country' => 'Italy',
            'subcategory_id' => 11
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Robertson Winery Sweet Red 750ML',
            'brand' => 'Robertson',
            'country' => 'South Africa',
            'subcategory_id' => 11
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => '4th Street Sweet White 5L',
            'brand' => 'Street',
            'country' => 'South Africa',
            'subcategory_id' => 12
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Banrock Station Chardonnay 750ML',
            'brand' => 'Banrock',
            'country' => 'Australia',
            'subcategory_id' => 13
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Berri Estates Chardonnay 750ML',
            'brand' => 'Berri',
            'country' => 'Australia',
            'subcategory_id' => 14
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Lindemans Bin 35 Rose 750ML',
            'brand' => 'Lindemans',
            'country' => 'Australia',
            'subcategory_id' => 15
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Indomita Varietal Cabernet Sauvignon Rose 750ML',
            'brand' => 'Indomita',
            'country' => 'Chiles',
            'subcategory_id' => 16
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Tamburlaine Wine Lovers Scarlett Bubbles 750ML',
            'brand' => 'Tamburlaine',
            'country' => 'Australia',
            'subcategory_id' => 17
        ]);

        DB::table('liquarproduct')->insert([
            'product_name' => 'Bottega Fragolino Rosso Party 750ML',
            'brand' => 'Bottega',
            'country' => 'Italy',
            'subcategory_id' => 17
        ]);
    }
}
