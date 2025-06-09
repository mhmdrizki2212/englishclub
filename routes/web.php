<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('home');
});

// Rute Halaman Statis Lainnya
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/core-comittee', [DepartmentController::class, 'showCoreComittee']);
Route::get('/academic-department', [DepartmentController::class, 'showAcademicDepartment']);
Route::get('/art-department', [DepartmentController::class, 'showArtDepartment']);
Route::get('/media-information', [DepartmentController::class, 'showMediaInformation']);
Route::get('/public-relations', [DepartmentController::class, 'showPublicRelations']);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// === KUMPULAN RUTE UNTUK PLACEMENT TEST ===
// 1. Rute untuk menampilkan form biodata
Route::get('/placement', [PlacementController::class, 'index'])->name('placement');

// 2. Rute untuk memproses data dari form
Route::post('/user/store', [PlacementController::class, 'store'])->name('user.store');

// 3. Rute untuk halaman kuis (tujuan akhir setelah submit)
Route::get('/placement/quiz/{testTaker}', [PlacementController::class, 'startQuiz'])->name('placement.quiz');

// 4. Rute untuk submit jawaban kuis
Route::post('/placement/submit/{testTaker}', [PlacementController::class, 'submitQuiz'])->name('placement.submit');

// 5. Rute untuk menampilkan halaman hasil
Route::get('/placement/result/{testTaker}', [PlacementController::class, 'showResult'])->name('placement.result');
// ==========================================
