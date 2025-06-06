<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlacementController;

// Route for placement form display
Route::get('/placement', [PlacementController::class, 'index'])->name('placement');
