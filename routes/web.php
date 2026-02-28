<?php

use Illuminate\Support\Facades\Route;

/*
use App\Http\Controllers\ProfileController;

Route::redirect('/', '/new/create');

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

Route::prefix('profile')->group(function () {
    Route::get('/create', [ProfileController::class, 'showForm']);
    Route::post('/result', [ProfileController::class, 'processForm']);
});
*/

use App\Http\Controllers\TestController;

Route::redirect('/', '/new/create');
Route::get('/new/create', [TestController::class, 'create']);
Route::post('/new/result', [TestController::class, 'result']);

Route::prefix('new')->group(function () {
    Route::get('/create', [TestController::class, 'create']);
    Route::post('/result', [TestController::class, 'result']);
});
