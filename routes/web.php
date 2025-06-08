<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BiodataEntryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\DepartmentController;


Route::get('/', function () {
    return view('home');
});


Route::get('/core-comittee', [DepartmentController::class, 'showCoreComittee']);
Route::get('/academic-department', [DepartmentController::class, 'showAcademicDepartment']);
Route::get('/art-department', [DepartmentController::class, 'showArtDepartment']);
Route::get('/media-information', [DepartmentController::class, 'showMediaInformation']);
Route::get('/public-relations', [DepartmentController::class, 'showPublicRelations']);
Route::get('/placement', [PlacementController::class, 'index'])->name('placement');



Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route for showing the placement form
Route::get('/placement', function () {
    return view('formuser');
})->name('placement');


Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::post('/user/store', [PlacementController::class, 'store'])->name('user.store');
