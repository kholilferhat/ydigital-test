<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('clinic_locations')->insert([
            [
                'doctor_id' => 1,
                'location_name' => 'Bandung - Soekarno Hatta',
                'address' => 'Erha Klinik Bandung - Soekarno Hatta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'doctor_id' => 1,
                'location_name' => 'Cimahi',
                'address' => 'Erha Klinik Cimahi',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
