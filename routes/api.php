<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\BookApiController;
use App\Http\Controllers\Api\TimeController;

Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);
Route::get('/sac/books/{id}', BookSacController::class);
Route::get('/time', [TimeController::class, 'index']);

Route::prefix('rest')->group(function () {
    Route::resource('books', BookRestController::class);
});
Route::prefix('restapi')->group(function () {
    Route::apiresource('books', BookApiController::class);
});
