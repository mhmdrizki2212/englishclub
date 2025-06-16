<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(6); // ambil data berita
        return view('home', compact('news')); // kirim ke halaman home (welcome.blade.php)
    }
}
