<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::view('/', 'welcome');
Route::view('login', 'login')->name('login')->middleware('guest');
Route::view('dashboard', 'dashboard')->middleware('auth')->name('dashboard');
Route::view('register', 'register')->name('register')->middleware('guest');
Route::view('eliminar', 'eliminar')->name('eliminar')->middleware('guest');

Route::POST('login', [LoginController::class, 'login']);
Route::POST('logout', [LoginController::class, 'logout']);
Route::POST('register', [RegisterController::class, 'register']);
