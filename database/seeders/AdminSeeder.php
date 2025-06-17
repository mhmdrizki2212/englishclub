<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Membuat data admin baru
        $admin = Admin::create([
            'email' => 'raka@gmail.com', // Ganti dengan email admin yang diinginkan
            'password' => Hash::make('password'), // Ganti dengan password yang diinginkan dan di-hash
        ]);

        // Login otomatis setelah admin dibuat
        Auth::guard('admin')->login($admin);  // Login otomatis menggunakan guard admin
    }
}
