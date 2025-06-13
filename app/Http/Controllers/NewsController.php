<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil hanya berita dengan status 'published'
        // dan mengurutkannya dari yang terbaru
        $news = News::where('status', 'published')->latest()->paginate(9); // 9 berita per halaman

        return view('news', compact('news'));
    }
}
