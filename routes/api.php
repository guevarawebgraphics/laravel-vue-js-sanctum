<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StoreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [UserController::class, 'getUserData']);
    Route::get('/stores', [StoreController::class, 'index']);
    Route::get('/store/{id}', [StoreController::class, 'edit']);
    Route::post('/create/store', [StoreController::class, 'store']);
    Route::post('/update/store/{id}', [StoreController::class, 'update']);
});

Route::post('/auth/login', [LoginController::class, 'loginUser']);
Route::post('/auth/register', [RegisterController::class, 'registerUser']);
