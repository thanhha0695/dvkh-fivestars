<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\LandingPageController;

// Main Page Route
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
