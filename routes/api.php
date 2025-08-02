<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;


// Route untuk autentikasi
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route untuk profile
Route::middleware('auth:sanctum')->get('/profile', [ProfileController::class, 'index']);
Route::middleware('auth:sanctum')->put('/profile', [ProfileController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/profile', [ProfileController::class, 'destroy']);
