<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\StatsController;

// Authors routes
Route::get('/authors', [AuthorController::class, 'list']);
Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('/authors/create', [AuthorController::class, 'store']);
Route::get('/authors/{id}', [AuthorController::class, 'details']);

Route::get('/authors/{id}/edit', [AuthorController::class, 'edit']);
Route::put('/authors/{id}/edit', [AuthorController::class, 'update']);

Route::get('/authors/{id}/delete', [AuthorController::class, 'delete']);
Route::delete('/authors/{id}/delete', [AuthorController::class, 'destroy']);

// Articles routes
Route::get('/articles', [ArticleController::class, 'list']);
Route::get('/articles/{id}', [ArticleController::class, 'details']);

// Stats
Route::get('/stats', [StatsController::class, 'show']);
