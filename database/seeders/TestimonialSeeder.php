<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'El Rumi',
                'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/testimony/testimoni5-1-150x150.jpg?format=auto',
                'testimony' => 'Buat cowok kayak gue yang cuek sama kulit. ERHA jadi penolong dengan ngasih gue treatment yang mudah di-maintain dengan hasil yang langsung terlihat, terlebih waktu gue lagi jerawatan',
                'job' => 'Artis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ratu Gania',
                'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/testimony/testimoni5-2-150x150.jpg?format=auto',
                'testimony' => 'Peeling di erha itu menurut aku TERBAIK. Asli sumpah no peres langsung keliatan hasilnya selesai treatment. Emang SEBAGUS ITU MAU NANGIS, Ngga akan relate kalo belom coba, makanya harus cobain sendiri',
                'job' => 'Influencer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Putri Navisyy',
                'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/testimony/testimoni5-3-150x150.jpg?format=auto',
                'testimony' => 'Emang bener peeling acne di ERHA tuh treatment FAVORITE. H+3 after treatment langsung berasa punya kulit baru, lebih halus, lebih cerah! Sekarang sisa bekas nya langsung ambil treatment V-Beam!',
                'job' => 'Influencer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

