<?php

namespace App\Http\Controllers;

use App\Models\TestTaker;
use App\Models\placement_test;
use App\Models\History;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    // ... (metode index dan store tetap sama)
    public function index()
    {
        return view('formuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:test_takers,email',
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:test_takers,nim',
        ]);

        $testTaker = TestTaker::create($request->only(['email', 'name', 'nim']));

        return redirect()->route('placement.quiz', ['testTaker' => $testTaker->id]);
    }

    public function startQuiz(TestTaker $testTaker)
    {
        $questions = placement_test::all();
        return view('placement_quiz', compact('testTaker', 'questions'));
    }

    /**
     * Memproses jawaban kuis, menghitung skor total dan per-tag.
     */
    public function submitQuiz(Request $request, TestTaker $testTaker)
    {
        $answers = $request->input('answers', []);
        $questionIds = array_keys($answers);

        $questions = placement_test::whereIn('id', $questionIds)->get();

        $totalScore = 0;
        $tagPerformance = [];

        foreach ($questions as $question) {
            $tag = $question->tags;
            // Inisialisasi jika tag belum ada
            if (!isset($tagPerformance[$tag])) {
                $tagPerformance[$tag] = ['correct' => 0, 'total' => 0];
            }
            $tagPerformance[$tag]['total']++;

            // Cek jawaban
            if (isset($answers[$question->id]) && $answers[$question->id] == $question->jawaban) {
                $totalScore++;
                $tagPerformance[$tag]['correct']++;
            }
        }

        // Simpan skor total ke database
        $testTaker->score = $totalScore;
        $testTaker->save();

        // Simpan ke history
        History::create([
            'test_taker_id' => $testTaker->id,
            'name' => $testTaker->name,
            'score' => $totalScore,
        ]);

        // Simpan analisis tag ke session untuk ditampilkan di halaman hasil
        session(['tagPerformance' => $tagPerformance]);

        return redirect()->route('placement.result', ['testTaker' => $testTaker->id]);
    }

    /**
     * Menampilkan halaman hasil/skor beserta analisisnya.
     */
    public function showResult(TestTaker $testTaker)
    {
        $tagPerformance = session('tagPerformance', []);
        $totalQuestions = placement_test::count(); // Ambil total soal untuk persentase

        return view('placement_result', compact('testTaker', 'tagPerformance', 'totalQuestions'));
    }
}
