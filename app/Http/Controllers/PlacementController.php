<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan model User sudah di-import
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
            'email' => 'required|email|unique:users,email',  // Validasi email unik
            'name' => 'required|string',  // Validasi nama wajib diisi
            'nim' => 'required|string|unique:users,nim',  // Validasi NIM unik
        ]);

        // Membuat user baru tanpa password
        $user = new User();
        $user->email = $request->email;  // Menyimpan email
        $user->name = $request->name;    // Menyimpan nama
        $user->nim = $request->nim;      // Menyimpan NIM
        $user->score = $request->score;  // Menyimpan skor
        $user->save();  // Menyimpan ke dalam database

        // Mengarahkan ke halaman placement setelah data disimpan
        return redirect()->route('placement');
    }
}
