<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AthurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('athur')->insert([
			'name' => 'Santosh',
        	'surname' => 'Tamang'
        ]);

        DB::table('athur')->insert([
			'name' => 'Kultosh',
        	'surname' => 'Gole'
        ]);

        DB::table('athur')->insert([
			'name' => 'Prasidha',
        	'surname' => 'Tamang'
        ]);
    }
}
