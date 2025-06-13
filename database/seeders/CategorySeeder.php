<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // <-- PENTING: Tambahkan ini untuk menggunakan helper Str::slug()

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definisikan daftar kategori
        $categories = [
            'Event',
            'Announcement',
            'Achievement',
            'Training',
        ];

        // Looping untuk setiap kategori dan buat slug-nya secara otomatis
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'slug' => Str::slug($category), // Membuat slug, contoh: "Announcement" -> "announcement"
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
