<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\News; // <-- Tambahkan model News
use App\Models\history; // <-- Tambahkan model history
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total berita
        $totalNews = News::count();

        // Mengambil 5 berita terbaru
        $recentNews = News::latest()->take(5)->get();

        // Mengambil data histori placement test
        $histories = history::latest()->get();

        // Kirim data ke view
        return view('back.dashboard-content', compact('totalNews', 'recentNews', 'histories'));
    }
}
