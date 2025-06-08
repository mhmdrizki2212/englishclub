<?php

namespace App\Http\Controllers;

use App\Models\TestTaker; // Pastikan model TestTaker sudah di-import
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    // Menampilkan form placement
    public function index()
    {
        return view('formuser');  // Menampilkan form untuk pengisian biodata
    }

    // Menyimpan data pengguna
    public function store(Request $request)
    {
        // Validasi data yang dimasukkan (email, name, nim, dan score)
        $request->validate([
            'email' => 'required|email|unique:test_takers,email',  // Validasi email unik
            'name' => 'required|string',  // Validasi nama wajib diisi
            'nim' => 'required|string|unique:test_takers,nim',  // Validasi NIM unik
        ]);

        // Membuat test_taker baru
        $testTaker = new TestTaker(); // Ganti User menjadi TestTaker
        $testTaker->email = $request->email;  // Menyimpan email
        $testTaker->name = $request->name;    // Menyimpan nama
        $testTaker->nim = $request->nim;      // Menyimpan NIM
        $testTaker->score = $request->score;  // Menyimpan skor
        $testTaker->save();  // Menyimpan ke dalam database

        // Mengarahkan ke halaman placement setelah data disimpan
        return redirect()->route('placement');
    }
}
