<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterSectorController;
use App\Http\Controllers\RegisterScheduleController;
use App\Http\Controllers\inconsistenciesNotificationController;

Route::get('/', function () {
    return view('home');
});


Route::get('/register', [RegisterController::class,'create'])
    ->name('register');

Route::post('/register', [RegisterController::class,'store'])
    ->name('register.store');

Route::get('/login', [LoginController::class,'create'])
    ->name('login');

Route::post('/login', [LoginController::class,'store'])
    ->name('client.store');

Route::get('/client', [ClientController::class, 'index'])
    ->name('client')->middleware('auth');

Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin');

Route::get('/registerSector', [RegisterSectorController::class, 'create'])
    ->name('registerSector');

Route::get('/registerSchedule', [RegisterScheduleController::class, 'create'])
    ->name('registerSchedule');

Route::get('/inconsistenciesNotification', [InconsistenciesNotificationController::class, 'create'])
    ->name('inconsistenciesNotification');


