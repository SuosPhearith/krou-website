
<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', action: [AdminController::class, 'home'])->name('home');
