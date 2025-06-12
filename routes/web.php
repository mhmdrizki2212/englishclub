<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\NewssController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\Back\QuizHistoryController; 

// Home route
Route::get('/', function () {
    return view('home');
});

// Static Pages Routes
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/core-comittee', [DepartmentController::class, 'showCoreComittee']);
Route::get('/academic-department', [DepartmentController::class, 'showAcademicDepartment']);
Route::get('/art-department', [DepartmentController::class, 'showArtDepartment']);
Route::get('/media-information', [DepartmentController::class, 'showMediaInformation']);
Route::get('/public-relations', [DepartmentController::class, 'showPublicRelations']);

// Dashboard route
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('newss', [NewssController::class, 'index'])->name('newss');

// Admin routes for quiz history
Route::get('/admin/quiz-history', [QuizHistoryController::class, 'index'])->name('admin.quiz.history');
Route::post('/admin/quiz-history/update/{historyId}', [QuizHistoryController::class, 'update'])->name('admin.quiz.history.update');
Route::get('/admin/quiz-history/delete/{historyId}', [QuizHistoryController::class, 'destroy'])->name('admin.quiz.history.delete');

// === Placement Test Routes ===

// Route for showing the landing page before biodata form
Route::get('/placement', [PlacementController::class, 'showLandingPage'])->name('placement.landing');

// Route for displaying the biodata form
Route::get('/placement/biodata', [PlacementController::class, 'index'])->name('placement.biodata');

// Route for processing the biodata form submission
Route::post('/user/store', [PlacementController::class, 'store'])->name('user.store');

// Route for displaying the quiz page (after biodata form submission)
Route::get('/placement/quiz/{testTaker}', [PlacementController::class, 'startQuiz'])->name('placement.quiz');

// Route for submitting quiz answers
Route::post('/placement/submit/{testTaker}', [PlacementController::class, 'submitQuiz'])->name('placement.submit');

// Route for displaying the result page
Route::get('/placement/result/{testTaker}', [PlacementController::class, 'showResult'])->name('placement.result');

// Route for downloading the certificate
Route::get('/placement/certificate/{testTaker}/download', [PlacementController::class, 'downloadCertificate'])->name('placement.certificate.download');
// ==========================================
