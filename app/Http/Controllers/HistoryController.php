<?php

namespace App\Http\Controllers;

use App\Models\TestTaker;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function storeHistory($testTakerId)
    {
        // Ambil data test_taker berdasarkan ID
        $testTaker = TestTaker::find($testTakerId);

        if (!$testTaker) {
            return response()->json(['error' => 'TestTaker not found'], 404);
        }

        // Buat record baru di tabel histories
        History::create([
            'test_taker_id' => $testTaker->id,
            'name' => $testTaker->name,
            'score' => $testTaker->score
        ]);

        return response()->json(['message' => 'History created successfully']);
    }
}
