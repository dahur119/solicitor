<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
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
    return view('welcome');
});


Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/practice-areas', [PageController::class, 'practiceAreas']);

Route::get('/team', [PageController::class, 'team']);

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/news', [NewsController::class, 'index'])->name("index");
Route::get('/news/{slug}', [NewsController::class, 'show'])->name("news.show");

Route::post('/news/{slug}/comment', [CommentController::class, 'store'])->name("comments.store");
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news-form', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{slug}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{slug}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
});

require __DIR__.'/auth.php';
