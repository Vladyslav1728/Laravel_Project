<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Rpc\TimeController;

// Common page
Route::redirect('/', '/new/create');

// TestController
Route::prefix('new')->group(function () {
    Route::get('/create', [TestController::class, 'create']);
    Route::post('/result', [TestController::class, 'result']);
});

// RPC controller for TIME
Route::get('/rpc-time', [TimeController::class, 'index']);
