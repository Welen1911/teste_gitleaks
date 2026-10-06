<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::prefix('api')->group(function () {
    Route::get('/', [ApiController::class, 'index']);
    Route::get('/data', [ApiController::class, 'getData']);
    Route::get('/access', [ApiController::class, 'getAccess']);
});
require __DIR__.'/settings.php';
