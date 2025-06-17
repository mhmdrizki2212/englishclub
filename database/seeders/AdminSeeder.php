<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Admin', // Nama yang ingin dimasukkan
            'email' => 'raka@gmail.com',
            'password' => Hash::make('password'), // Pastikan password ter-hash dengan benar
        ]);
    }
}
