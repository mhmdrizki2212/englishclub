<?php
// app/Http/Controllers/Back/DashboardController.php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\history as History;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Total Visits (Ambil dari tabel visitors)
        $totalVisits = Visitor::count();

        // 2. Total News
        $totalNews = News::count();

        // 3. History Placement Test (Ambil 5 terbaru)
        $histories = History::latest()->take(5)->get();

        // 4. Recent Posts (Ambil 5 berita terbaru)
        $recentNews = News::latest()->take(5)->get();

        // 5. Data untuk Grafik Visitor
        $chartLabels = [];
        $chartDataCurrent = [];
        $chartDataPrevious = [];

        // Loop untuk 6 bulan terakhir (termasuk bulan ini)
        for ($i = 5; $i >= 0; $i--) {
            $currentMonth = Carbon::now()->subMonths($i);
            $previousMonth = Carbon::now()->subMonths($i + 6); // 6 bulan sebelumnya untuk perbandingan

            // Label bulan (e.g., "Jan", "Feb")
            $chartLabels[] = $currentMonth->format('M');

            // Data pengunjung untuk 6 bulan terakhir
            $chartDataCurrent[] = Visitor::whereYear('visited_at', $currentMonth->year)
                ->whereMonth('visited_at', $currentMonth->month)
                ->count();

            // Data pengunjung untuk 6 bulan sebelumnya
            $chartDataPrevious[] = Visitor::whereYear('visited_at', $previousMonth->year)
                ->whereMonth('visited_at', $previousMonth->month)
                ->count();
        }

        // Kirim semua data ke view 'dashboard-content'
        return view('back.dashboard-content', [
            'totalVisits' => $totalVisits,
            'totalNews' => $totalNews,
            'histories' => $histories,
            'recentNews' => $recentNews,
            'chartLabels' => $chartLabels,
            'chartDataCurrent' => $chartDataCurrent,
            'chartDataPrevious' => $chartDataPrevious,
        ]);
    }
}
