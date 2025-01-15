
<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [FrontendController::class, 'home'])->name('home');

//================= >> Worksheet
Route::get('/worksheet', action: [FrontendController::class, 'worksheet'])->name('worksheet');
Route::get('/worksheet/detail/{id}', [FrontendController::class, 'worksheetDetail'])->name('worksheet-detail');

//================= >> Video
Route::get('/video', action: [FrontendController::class, 'video'])->name('video');
Route::get('/video/detail', action: [FrontendController::class, 'videoDetail'])->name('video-detail');

//================= >> book
Route::get('/book', action: [FrontendController::class, 'book'])->name('book');
Route::get('/book/detail', action: [FrontendController::class, 'bookDetail'])->name('book-detail');
