<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route to handle storing the user data from the form
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
