<?php

namespace App\Http\Controllers;

use App\Models\TestTaker;
use App\Models\placement_test;
use App\Models\History;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PlacementController extends Controller
{
    // Show the landing page before the biodata form
    public function showLandingPage()
    {
        return view('placement_landing');  // This will render the landing page view
    }

    // Show the biodata form
    public function index()
    {
        return view('formuser'); // This will show the biodata form
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

    public function submitQuiz(Request $request, TestTaker $testTaker)
    {
        $answers = $request->input('answers', []);
        $questionIds = array_keys($answers);

        $questions = placement_test::whereIn('id', $questionIds)->get();

        $totalScore = 0;
        $tagPerformance = [];

        foreach ($questions as $question) {
            $tag = $question->tags;
            if (!isset($tagPerformance[$tag])) {
                $tagPerformance[$tag] = ['correct' => 0, 'total' => 0];
            }
            $tagPerformance[$tag]['total']++;

            if (isset($answers[$question->id]) && $answers[$question->id] == $question->jawaban) {
                $totalScore++;
                $tagPerformance[$tag]['correct']++;
            }
        }

        // Save score to database
        $testTaker->score = $totalScore;
        $testTaker->save();

        // Save to history
        History::create([
            'test_taker_id' => $testTaker->id,
            'name' => $testTaker->name,
            'score' => $totalScore,
        ]);

        session(['tagPerformance' => $tagPerformance]);

        return redirect()->route('placement.result', ['testTaker' => $testTaker->id]);
    }

    public function showResult(TestTaker $testTaker)
    {
        $tagPerformance = session('tagPerformance', []);
        $totalQuestions = placement_test::count();

        return view('placement_result', compact('testTaker', 'tagPerformance', 'totalQuestions'));
    }

     public function downloadCertificate(TestTaker $testTaker)
    {
        $totalQuestions = placement_test::count();

        $data = [
            'testTaker' => $testTaker,
            'totalQuestions' => $totalQuestions,
        ];

        // Membuat PDF dari view certificate.blade.php
        $pdf = PDF::loadView('certificate', $data)->setPaper('a4', 'landscape');

        // Mengunduh PDF dengan nama file yang unik
        return $pdf->download('certificate-' . $testTaker->nim . '.pdf');
    }
}
