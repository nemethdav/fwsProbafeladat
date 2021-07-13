<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Maintenance_types_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("maintenance_types")->insert([
            'maintenanceType' => 'Alapkarbantartás'
        ]);

        DB::table("maintenance_types")->insert([
            'maintenanceType' => 'Üzemeltetői ellenőrzés'
        ]);
    }
}
