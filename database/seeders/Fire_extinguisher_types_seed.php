<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Fire_extinguisher_types_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'Cervinka P2 (8 A, 55 B)'
        ]);
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'Cervinka P4 CE (13 A, 70 B, C)'
        ]);
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'Cervinka P6 Ce (34A, 183 B, C)'
        ]);
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'Fire Stop P 12 TTBT (55 A, 233 B,C)'
        ]);
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'Fire Stop P 12 TTBT (43 A, 233 B, C)'
        ]);
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'GAZ-TECH GP-2x ABC (13 A, 89 B, C)'
        ]);
        DB::table("fire_extinguisher_types")->insert([
            'fire_extinguisher_type' => 'GAZ-TECH GP-6x ABC (34 A)'
        ]);
    }
}
