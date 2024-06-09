<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
                [
                    'name' => 'dr. Stella Adriana Limanjaya',
                    'slug' => 'dr-stella-adriana-limanjaya',
                    'first_practice_year' => 2017,
                    'str_number' => '3221100323135560',
                    'clinical_interest' => 'Beberapa kasus dermatologi umum, Acne, Brightening, Anti-Aging, Make Over, Hair',
                    'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/%242b%2410%24MqOObgYSbSh/lkH87Be4yOXCm2cY3b6DmsibRqnIoFR1qL9vS41gW.png?format=auto',        
                    'education' => 'Universitas Kristen Maranata: Pendidikan Dokter Umum',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
                ]);
    }
}
