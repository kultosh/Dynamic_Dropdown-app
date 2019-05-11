<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Bootstrap',
        	'cover' => 'Webdesign',
        	'price' => '134.50',
        	'author_id' => 1
        ]);

        DB::table('books')->insert([
            'title' => 'Java',
        	'cover' => 'Programming',
        	'price' => '542.22',
        	'author_id' => 2
        ]);

        DB::table('books')->insert([
            'title' => 'PHP',
        	'cover' => 'Webdesign',
        	'price' => '200.32',
        	'author_id' => 3
        ]);

         DB::table('books')->insert([
            'title' => 'C#',
            'cover' => 'Programming',
            'price' => '300.32',
            'author_id' => 2
        ]);

        DB::table('books')->insert([
            'title' => 'ASP',
            'cover' => 'Web',
            'price' => '210.32',
            'author_id' => 3
        ]);  
    }
}
