<?php

// app/Http/Middleware/LogAdminVisitorMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Carbon\Carbon;

class LogAdminVisitorMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan hanya mencatat kunjungan ke halaman admin
        if ($request->is('admin/*') || $request->is('admin')) {
            $ipAddress = $request->ip();
            $today = Carbon::today();

            // Cek apakah pengunjung dengan IP ini sudah dicatat hari ini
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

