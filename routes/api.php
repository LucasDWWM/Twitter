<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

// Groupement des routes avec middleware d'authentification
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('articles', ArticleController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('tags', TagController::class);
});


