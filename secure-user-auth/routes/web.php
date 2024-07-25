<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AuthCheck;


// Route::get('/', function () {
//     return view('welcome');
// })->middleware(AuthCheck::class);

Route::get('/', [AdminAuthController::class, 'index']);
Route::get('/login', [AdminAuthController::class, 'login']);
Route::get('/registration', [AdminAuthController::class, 'registration']);
Route::post('/register-user', [AdminAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AdminAuthController::class, 'loginUser'])->name('login-user');
// Route::get('/dashboard', [CustomAuthenticationController::class, 'dashboard'])->middleware(AuthCheck::class);
Route::get('/dashboard', [AdminAuthController::class, 'dashboard']);
Route::get('logout', [AdminAuthController::class, 'logout']);
