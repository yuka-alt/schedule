<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ScheduleController;

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

Route::get('/schedules', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedules');

Route::post('/schedule', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'calendar'])->name('calendar');
Route::post('/store', [App\Http\Controllers\ScheduleController::class, 'store'])->name('store');
Route::get('/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('create');
Route::get('/schedules', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedules');
Route::get('/oneday', [App\Http\Controllers\ScheduleController::class, 'oneday'])->name('oneday');
