<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;

class DashboardController extends Controller
{
    public function index()
    {
        $histories = History::latest()->take(5)->get();
        return view('back.dashboard', compact('histories'));
    }

}
