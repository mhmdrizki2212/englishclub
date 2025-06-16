<?php

//namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor; // Model Visitor yang digunakan untuk mencatat pengunjung
use Carbon\Carbon;

class LogAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah ini adalah akses ke halaman admin
        if ($request->is('admin/*')) {
            $ipAddress = $request->ip();
            $today = Carbon::today();

            // Cek apakah IP pengunjung sudah dicatat hari ini
            $visitorExists = Visitor::where('ip_address', $ipAddress)
                                    ->whereDate('visited_at', $today)
                                    ->exists();

            if (!$visitorExists) {
                Visitor::create([
                    'ip_address' => $ipAddress,
                    'user_agent' => $request->userAgent(),
                    'visited_at' => $today,
                ]);
            }
        }

        return $next($request);
    }
}
