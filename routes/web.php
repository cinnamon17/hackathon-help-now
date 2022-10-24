<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/', HomeController::class);
Route::resource('event', EventController::class);
Route::resource('dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('index', 'dashboard');

require __DIR__.'/auth.php';
