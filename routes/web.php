<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BiodataEntryController;

Route::get('/', function () {
    return view('home');
});

// Route for showing the placement form
Route::get('/placement', function () {
    return view('formuser');
})->name('placement');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::post('/user/store', [BiodataEntryController::class, 'store'])->name('user.store');
