<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

