<?php

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
Route::get('/register', [App\Http\Controllers\Schedulecontroller::class, 'register'])->name('register');
Route::get('/schedules', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedules');
Route::get('/1day', [App\Http\Controllers\Schedulecontroller::class, '1day'])->name('1day');
