<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScreenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create a sample screen entry
        DB::table( 'screens' ) -> insert ([
            'name' => '75" full color above Molly Blooms',
            'address' => '510, King Street',
            'city' => 'London',
            'state' => 'ON',
            'country' => 'CA',
            'longitude' => '42.9867665',
            'latitude' => '-81.2368064',
            'mad' => 10,
            'cost_per_second' => 1.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
