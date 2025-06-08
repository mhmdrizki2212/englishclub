<?php

namespace App\Http\Controllers;

use App\Models\TestTaker;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Menampilkan halaman form biodata.
     */
    public function index()
    {
        return view('formuser');
    }

    /**
     * Menyimpan data pengguna dan mengarahkan ke halaman kuis.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'email' => 'required|email|unique:test_takers,email',
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:test_takers,nim',
        ]);

        // Buat entri baru di tabel test_takers
        $testTaker = TestTaker::create([
            'email' => $request->email,
            'name' => $request->name,
            'nim' => $request->nim,
            'score' => null, // Skor masih kosong
        ]);

        // Arahkan ke halaman kuis dengan membawa data peserta
        return redirect()->route('placement.quiz', ['testTaker' => $testTaker->id]);
    }

    /**
     * Menampilkan halaman kuis (untuk saat ini hanya placeholder).
     */
    public function startQuiz(TestTaker $testTaker)
    {
        // Nanti di sini Anda akan memuat soal-soal dari database
        // dan menampilkan halaman kuis yang sebenarnya.
        return view('placement_quiz', compact('testTaker'));
    }
}
