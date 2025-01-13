<?php

use App\Http\Controllers\api\WorksheetController;
use Illuminate\Support\Facades\Route;

Route::post('/worksheets', [WorksheetController::class, 'createWorksheet']);
