<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialiteController;
use App\Models\Article;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\Google;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->middleware('auth')->name('article.create');
Route::get('/article/{article}/show', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth')->name('article.edit');
Route::post('/article/search', [ArticleController::class, 'search'])->name('article.search');

Route::get('/article/my', [ArticleController::class, 'my_index'])->name('my.index');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth')->name('category.create');
Route::POST('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/show', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->middleware('auth')->name('category.edit');
Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Zona revisor
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/article/{article}', [RevisorController::class, 'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article');
Route::patch('/rifiuta/article/{article}', [RevisorController::class, 'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');

// Richiesta revisor
Route::get('/richiesta/revisore',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}',[RevisorController::class, 'makeRevisor'])->name('make.revisor');

//Socialite
Route::get('/auth/google', [SocialiteController::class, 'loginGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialiteController::class, 'callbackGoogle']);
Route::get('/auth/redirect', [SocialiteController::class, 'login'])->name('socialite.login');
Route::get('/auth/callback', [SocialiteController::class, 'callback']);

Route::get('/ricerca/annuncio' , [PageController::class, 'searchArticle'])->name('search.article');



