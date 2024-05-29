<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/home', [AuthController::class, 'index'])->name('home');


// Route pour afficher toutes les catégories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Route pour afficher une catégorie spécifique
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// Route pour créer une nouvelle catégorie
Route::get('/categories/create', function () {
    return view('categories.create');
});
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Route pour éditer une catégorie
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

// Route pour supprimer une catégorie
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Routes pour les tags
Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
Route::post('/tags', [TagController::class, 'store'])->name('tags.store');
Route::get('/tags/{id}', [TagController::class, 'show'])->name('tags.show');
Route::get('/tags/{id}/edit', [TagController::class, 'edit'])->name('tags.edit');
Route::put('/tags/{id}', [TagController::class, 'update'])->name('tags.update');
Route::delete('/tags/{id}', [TagController::class, 'destroy'])->name('tags.destroy');

// Routes pour les articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');