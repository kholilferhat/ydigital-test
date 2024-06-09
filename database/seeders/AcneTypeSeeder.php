<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AcneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('acne_type')->insert([

            [
            'title' => 'Acne Scar/Bekas Jerawat',
            'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/acne-scar.jpg?format=auto',
            'description' => 'Bekas jerawat jaringan parut',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Comedo',
            'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/comedo.jpg?format=auto',
            'description' => 'Beruntusan, komedo hitam (blackhead), dan komedo putih (whitehead)',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Jerawat Aktif',
            'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/jerawat-aktif.jpg?format=auto',
            'description' => 'Segala jenis mulai dari popule, nodule, ataupun cystic mulai dari tingkat ringan sampai berat',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Post Inflamasi Hiperpigmentasi (PIH)',
            'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/pih.jpg?format=auto',
            'description' => 'Post Inflammatory Hyperpigmentation atau bekas jerawat kehitaman',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Post Inflammatory Erythema (PIE)',
            'image' => 'https://d3sgbq9gctgf5o.cloudfront.net/wikis/desktop/pie.jpg?format=auto',
            'description' => 'Post Inflammatory Erythema atau bekas jerawat kemerahan.',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}
