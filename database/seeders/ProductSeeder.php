<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([

            [
            'title' => 'Acne Backspray',
            'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/20231107025948.png',
            'rating' => 5,
            'price' => 60000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Acne Facial Mask',
            'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/20231107030326.png',
            'rating' => 4.6,
            'price' => 29000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Acne Loose Powder',
            'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/20231107030359.png',
            'rating' => 5,
            'price' => 100000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Acne Pressed Powder',
            'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/20231107030437.png',

            'rating' => 5,
            'price' => 100000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Acne Protected Sunscreen SPF 45 PA++',
            'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/20230126031842.png',
            'rating' => 5,
            'price' => 100000,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Acne Spot Gel',
            'image' => 'https://erha-prod.s3.ap-southeast-1.amazonaws.com/erhav2/image/20230427092146.png',
            'rating' => 5,
            'price' => 60000,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]
    );
    }
}
