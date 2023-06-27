<?php

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/category', [CategoryController::class, 'category_index'])->name('category_index');
Route::get('/category/crea', [CategoryController::class, 'category_create'])->name('category_create');
Route::post('/category/salva', [CategoryController::class, 'category_store'])->name('category_store');
Route::get('/category/{category}/dettagli', [CategoryController::class, 'category_show'])->name('category_show');
Route::get('/category/{category}/modifica', [CategoryController::class, 'category_edit'])->name('category_edit');
Route::put('/category/{category}', [CategoryController::class, 'category_update'])->name('category_update');
Route::delete('/category/{category}', [CategoryController::class, 'category_destroy'])->name('category_destroy');