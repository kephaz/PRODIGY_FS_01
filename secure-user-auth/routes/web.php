<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AuthCheck;


// Route::get('/', function () {
//     return view('welcome');
// })->middleware(AuthCheck::class);

Route::get('/', [AdminAuthController::class, 'index']);
Route::get('/login', [AdminAuthController::class, 'login'])->middleware('alreadyloggedin');
Route::get('/registration', [AdminAuthController::class, 'registration'])->middleware('alreadyloggedin');
Route::post('/register-user', [AdminAuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AdminAuthController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('logout', [AdminAuthController::class, 'logout']);

// Asaaju Olalelkan
