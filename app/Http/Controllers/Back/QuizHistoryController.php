<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class QuizHistoryController extends Controller
{
    // Method to view all quiz history records for the admin
    public function index()
    {
        // Retrieve all history records
        $histories = History::all();  // You may want to paginate or filter this

        return view('back.quizhistory', compact('histories'));
    }

    // Method to update a quiz history record
    public function update(Request $request, $historyId)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'quiz_title' => 'required|string|max:255',
            'score' => 'required|integer',
        ]);

        // Find the quiz history record by ID
        $history = History::find($historyId);

        // Check if the record exists
        if (!$history) {
            return redirect()->route('admin.quiz-history.index')->with('error', 'Quiz History not found.');
        }

        // Update the record with new data
        $history->update([
            'quiz_title' => $validatedData['quiz_title'],
            'score' => $validatedData['score'],
        ]);

        // Redirect back with success message
        return redirect()->route('admin.quiz-history.index')->with('success', 'Quiz History updated successfully.');
    }

    // Method to delete a quiz history record
    public function destroy($historyId)
    {
        // Find the quiz history record by ID
        $history = History::find($historyId);

        // Check if the record exists
        if (!$history) {
            return redirect()->route('admin.quiz-history.index')->with('error', 'Quiz History not found.');
        }

        // Delete the record
        $history->delete();

        // Redirect back with success message
        return redirect()->route('admin.quiz-history.index')->with('success', 'Quiz History deleted successfully.');
    }
}
