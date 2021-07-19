<?php

use App\Http\Controllers\ScheduleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schedule', [ScheduleController::class, 'index'])->name('index');

Route::get('/today', [ScheduleController::class, 'day'])->name('today');

Route::get('/create', [ScheduleController::class, 'create'])->name('create');

Route::get('/store', [ScheduleController::class, 'store'])->name('store');
Route::post('/store', [ScheduleController::class, 'store'])->name('store');
