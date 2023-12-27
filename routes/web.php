<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
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

//! Route cho auth
Route::get('login',[LoginController::class,'ShowLoginForm'])->name('login.');
Route::post('login',[LoginController::class,'Login'])->name('login');

Route::get('register',[RegisterController::class,'ShowRegisterForm'])->name('register');
Route::post('register',[RegisterController::class,'Register'])->name('register');





