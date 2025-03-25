<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('books', [BookController::class, 'index']);
Route::post('books', [BookController::class, 'store']);
Route::get('books/{book}', [BookController::class, 'show']);
Route::put('books/{book}', [BookController::class, 'update']);
Route::delete('books/{book}', [BookController::class, 'destroy']);

Route::get('/test', function () {
    return response()->json(['message' => '¡API conectada!']);
});

Route::apiResource('books', BookController::class);
