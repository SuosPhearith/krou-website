<?php

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

Route::group(['namespace' => 'admin', 'prefix' => 'web/admin'], function () {
    require(__DIR__ . '/admin.php');
});

Route::group(['namespace' => 'frontend'], function () {
    require(__DIR__ . '/frontend.php');
});
