<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::POST('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/show', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::PUT('/article/update', [ArticleController::class, 'update'])->name('article.update');
Route::DELETE('/article/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');

Route::get('/category', [CategoryController::class, 'category_index'])->name('category_index');
Route::get('/category/crea', [CategoryController::class, 'category_create'])->name('category_create');
Route::post('/category/salva', [CategoryController::class, 'category_store'])->name('category_store');
Route::get('/category/{category}/dettagli', [CategoryController::class, 'category_show'])->name('category_show');
Route::get('/category/{category}/modifica', [CategoryController::class, 'category_edit'])->name('category_edit');
Route::put('/category/{category}', [CategoryController::class, 'category_update'])->name('category_update');
Route::delete('/category/{category}', [CategoryController::class, 'category_destroy'])->name('category_destroy');