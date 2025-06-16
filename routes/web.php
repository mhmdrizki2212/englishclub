<?php

use Illuminate\Support\Facades\Route;

// Import semua controller yang dibutuhkan
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\NewsController as AdminNewsController;
use App\Http\Controllers\Back\QuizHistoryController;
use App\Http\Controllers\Back\PlacementTestController as AdminPlacementTestController;
use App\Models\News;

/*
|--------------------------------------------------------------------------
| RUTE HALAMAN PUBLIK (Untuk Pengunjung)
|--------------------------------------------------------------------------
*/

// Rute Halaman Home
Route::get('/', function () {
    // Mengambil berita terbaru dengan pagination
    $news = News::latest()->paginate(6); 

    // Menampilkan halaman home dengan berita
    return view('home', compact('news'));
})->name('home');


Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Rute untuk Halaman Departemen
Route::prefix('department')->name('department.')->group(function () {
    Route::get('/core-comittee', [DepartmentController::class, 'showCoreComittee'])->name('core');
    Route::get('/academic', [DepartmentController::class, 'showAcademicDepartment'])->name('academic');
    Route::get('/art-department', [DepartmentController::class, 'showArtDepartment'])->name('art');
    Route::get('/media-information', [DepartmentController::class, 'showMediaInformation'])->name('media');
    Route::get('/public-relations', [DepartmentController::class, 'showPublicRelations'])->name('pr');
});

// Rute untuk Placement Test (Publik)
Route::prefix('placement')->name('placement.')->group(function () {
    Route::get('/', [PlacementController::class, 'showLandingPage'])->name('landing');
    Route::get('/biodata', [PlacementController::class, 'index'])->name('biodata');
    Route::post('/user/store', [PlacementController::class, 'store'])->name('store');
    Route::get('/quiz/{testTaker}', [PlacementController::class, 'startQuiz'])->name('quiz');
    Route::post('/submit/{testTaker}', [PlacementController::class, 'submitQuiz'])->name('submit');
    Route::get('/result/{testTaker}', [PlacementController::class, 'showResult'])->name('result');
    Route::get('/certificate/{testTaker}/download', [PlacementController::class, 'downloadCertificate'])->name('certificate.download');
});


/*
|--------------------------------------------------------------------------
| RUTE HALAMAN ADMIN
|--------------------------------------------------------------------------
*/

// PERHATIAN: Grup ini sengaja tidak diberi middleware auth sesuai permintaan Anda.
// Namun, sangat disarankan untuk menambahkan ->middleware('auth') sebelum production.
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Menggunakan Route::resource untuk News & Placement Test agar lebih ringkas
    Route::resource('news', AdminNewsController::class);
    Route::resource('placement-test', AdminPlacementTestController::class);

    // Rute untuk Quiz History
    Route::get('/quiz-history', [QuizHistoryController::class, 'index'])->name('quiz-history.index');
    Route::post('/quiz-history/update/{historyId}', [QuizHistoryController::class, 'update'])->name('quiz-history.update');
    Route::get('/quiz-history/delete/{historyId}', [QuizHistoryController::class, 'destroy'])->name('quiz-history.delete');
});
