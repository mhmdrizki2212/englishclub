<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PlacementTestSeeder; // Pastikan ini ada
use Database\Seeders\CategorySeeder;      // Tambahkan use statement untuk CategorySeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Panggil semua seeder yang Anda butuhkan di dalam array ini
        $this->call([
            PlacementTestSeeder::class,
            CategorySeeder::class,
            AdminSeeder::class, // <-- CUKUP TAMBAHKAN BARIS INI
        ]);
    }
}
