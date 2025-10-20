<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Goed:
        $json = file_get_contents(database_path('seeders/projectSeeders.json'));

        $aannemers = json_decode($json, true);

        foreach ($aannemers as $aannemer) {
            DB::table('contractors')->insert([
                'contractor_code' => $aannemer['contractor_code'],
                'legal_name'      => $aannemer['legal_name'],
                'trade'           => $aannemer['trade'],
                'country'         => $aannemer['country'],
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        } 
    }
}
