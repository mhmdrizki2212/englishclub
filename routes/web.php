<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlacementController;

// Route for home page
Route::get('/', function () {
    return view('home');
});

// Route for showing the placement form
Route::get('/placement', function () {
    return view('formuser');
})->name('placement');

// Route to store user data (submit form data)
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');


