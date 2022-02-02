<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoatTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boat_types')->insert([
            'name' => 'Barco Grande',
        ]);

        DB::table('boat_types')->insert([
            'name' => 'Barco Pequeño',
        ]);
    }
}
