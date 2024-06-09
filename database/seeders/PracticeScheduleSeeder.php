<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PracticeScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('practice_schedules')->insert([
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Senin',
                'start_time' => '14:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Selasa',
                'start_time' => '09:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Rabu',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Kamis',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Jumat',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Sabtu',
                'start_time' => '09:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 1,
                'doctor_id'=>1,
                'day' => 'Minggu',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Senin',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Selasa',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Rabu',
                'start_time' => '09:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Kamis',
                'start_time' => '09:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Jumat',
                'start_time' => '09:00',
                'end_time' => '19:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Sabtu',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'clinic_location_id' => 2,
                'doctor_id'=>1,
                'day' => 'Minggu',
                'start_time' => null,
                'end_time' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);

    }
}
