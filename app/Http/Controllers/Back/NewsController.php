<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\categories as Category; // Menggunakan model categories
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Menampilkan daftar semua berita di halaman admin.
     */
    public function index()
    {
        // Mengambil semua berita, diurutkan dari yang terbaru
        $news = News::latest()->get();
        return view('back.news.index', compact('news'));
    }

    /**
     * Menampilkan form untuk membuat berita baru.
     */
    public function create()
    {
        // Mengambil semua kategori untuk ditampilkan di dropdown form
        $categories = Category::all();
        return view('back.news.create', compact('categories'));
    }

    /**
     * Menyimpan berita baru ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:published,draft,archived',
        ]);

        $data = $request->all();

        // Menetapkan admin_id ke 1 secara manual (sesuai permintaan tanpa login)
        $data['admin_id'] = 1;

        // Mengelola upload gambar jika ada
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news-images', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }

    /**
     * Menampilkan form untuk mengedit berita yang sudah ada.
     * Menggunakan Route Model Binding untuk mengambil data berita secara otomatis.
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('back.news.edit', compact('news', 'categories'));
    }

    /**
     * Memperbarui data berita di database.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:published,draft,archived',
        ]);

        $data = $request->all();
        $data['admin_id'] = 1; // Tetap tetapkan admin_id default

        // Jika ada gambar baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage jika ada
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('news-images', 'public');
        }

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Menghapus data berita dari database.
     */
    public function destroy(News $news)
    {
        // Hapus gambar dari storage jika ada
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully.');
    }
}
