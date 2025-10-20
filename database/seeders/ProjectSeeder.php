<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\File;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $json = file_get_contents(database_path('seeders\pSeeders.json'));

        $projects = json_decode($json, true);

         foreach ($projects as $project) {
            DB::table('projects')->insert([
                'project_code' => $project['project_code'],
                'name'             => $project['name'],
                'status'           => $project['status'],
                'start_date'         => $project['start_date'],
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);
        }

    }
}
