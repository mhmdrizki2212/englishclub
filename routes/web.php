<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\NewssController;
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
Route::get('newss', [NewssController::class, 'index'])->name('newss');

// === KUMPULAN RUTE UNTUK PLACEMENT TEST ===

// Rute untuk menampilkan halaman pertama sebelum form biodata (Landing Page)
Route::get('/placement', [PlacementController::class, 'showLandingPage'])->name('placement.landing');

// Rute untuk menampilkan form biodata
Route::get('/placement/biodata', [PlacementController::class, 'index'])->name('placement.biodata');

// Rute untuk memproses data dari form biodata
Route::post('/user/store', [PlacementController::class, 'store'])->name('user.store');

// Rute untuk halaman kuis (tujuan akhir setelah submit)
Route::get('/placement/quiz/{testTaker}', [PlacementController::class, 'startQuiz'])->name('placement.quiz');

// Rute untuk submit jawaban kuis
Route::post('/placement/submit/{testTaker}', [PlacementController::class, 'submitQuiz'])->name('placement.submit');

// Rute untuk menampilkan halaman hasil
Route::get('/placement/result/{testTaker}', [PlacementController::class, 'showResult'])->name('placement.result');

// Rute untuk sertifikat
Route::get('/placement/certificate/{testTaker}/download', [PlacementController::class, 'downloadCertificate'])->name('placement.certificate.download');
// ==========================================
