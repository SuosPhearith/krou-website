<?php

use App\Http\Controllers\api\BookController;
use App\Http\Controllers\api\BookDocumentController;
use App\Http\Controllers\api\DashboardController;
use App\Http\Controllers\api\DocumentController;
use App\Http\Controllers\api\LecturerController;
use App\Http\Controllers\api\VideoController;
use App\Http\Controllers\api\WorksheetController;
use App\Http\Controllers\api\WorksheetDocumentController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard-counts', [DashboardController::class, 'getCounts']);
    Route::prefix('worksheets')->group(function () {
        Route::post('/create', [WorksheetController::class, 'createWorksheet']);
        Route::get('/', [WorksheetController::class, 'getWorksheets']);
        Route::get('/{id}', [WorksheetController::class, 'getWorksheet']);
        Route::put('/update/{id}', [WorksheetController::class, 'updateWorksheet']);
        Route::delete('/delete/{id}', [WorksheetController::class, 'deleteWorksheet']);
        Route::patch('/toggle-status/{id}', [WorksheetController::class, 'toggleStatusWorksheet']);
    });

    Route::prefix('worksheet-documents')->group(function () {
        Route::post('/create', [WorksheetDocumentController::class, 'createWorksheetDocument']);
        Route::get('/', [WorksheetDocumentController::class, 'getWorksheetDocuments']);
        Route::get('/{id}', [WorksheetDocumentController::class, 'getWorksheetDocument']);
        Route::put('/update/{id}', [WorksheetDocumentController::class, 'updateWorksheetDocument']);
        Route::delete('/delete/{id}', [WorksheetDocumentController::class, 'deleteWorksheetDocument']);
        Route::patch('/toggle-status/{id}', [WorksheetDocumentController::class, 'toggleStatusWorksheetDocument']);
    });

    Route::prefix('books')->group(function () {
        Route::post('/create', [BookController::class, 'createBook']);
        Route::get('/', [BookController::class, 'getBooks']);
        Route::get('/{id}', [BookController::class, 'getBook']);
        Route::put('/update/{id}', [BookController::class, 'updateBook']);
        Route::delete('/delete/{id}', [BookController::class, 'deleteBook']);
        Route::patch('/toggle-status/{id}', [BookController::class, 'toggleStatusBook']);
    });

    Route::prefix('book-documents')->group(function () {
        Route::post('/create', [BookDocumentController::class, 'createBookDocument']);
        Route::get('/', [BookDocumentController::class, 'getBookDocuments']);
        Route::get('/{id}', [BookDocumentController::class, 'getBookDocument']);
        Route::put('/update/{id}', [BookDocumentController::class, 'updateBookDocument']);
        Route::delete('/delete/{id}', [BookDocumentController::class, 'deleteBookDocument']);
        Route::patch('/toggle-status/{id}', [BookDocumentController::class, 'toggleStatusBookDocument']);
    });

    Route::prefix('documents')->group(function () {
        Route::post('/create', [DocumentController::class, 'createDocument']);
        Route::get('/', [DocumentController::class, 'getDocuments']);
        Route::get('/{id}', [DocumentController::class, 'getDocument']);
        Route::put('/update/{id}', [DocumentController::class, 'updateDocument']);
        Route::delete('/delete/{id}', [DocumentController::class, 'deleteDocument']);
        Route::patch('/toggle-status/{id}', [DocumentController::class, 'toggleStatusDocument']);
    });

    Route::prefix('lecturers')->group(function () {
        Route::post('/create', [LecturerController::class, 'createLecturer']);
        Route::get('/', [LecturerController::class, 'getLecturers']);
        Route::get('/{id}', [LecturerController::class, 'getLecturer']);
        Route::put('/update/{id}', [LecturerController::class, 'updateLecturer']);
        Route::delete('/delete/{id}', [LecturerController::class, 'deleteLecturer']);
        Route::patch('/toggle-status/{id}', [LecturerController::class, 'toggleStatusLecturer']);
    });

    Route::prefix('videos')->group(function () {
        Route::post('/create', [VideoController::class, 'createVideo']);
        Route::get('/', [VideoController::class, 'getVideos']);
        Route::get('/{id}', [VideoController::class, 'getVideo']);
        Route::put('/update/{id}', [VideoController::class, 'updateVideo']);
        Route::delete('/delete/{id}', [VideoController::class, 'deleteVideo']);
        Route::get('/lecturer/{lecturers_id}', [VideoController::class, 'getVideosByLecturer']);
        Route::patch('/toggle-status/{id}', [VideoController::class, 'toggleStatus']);
    });
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
