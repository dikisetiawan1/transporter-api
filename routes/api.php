<?php

use App\Http\Controllers\Api\SoController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::post('/register', [AuthController::class, 'register']);

Route::get('/user', function (Request $request) {
  return $request->user();
})->middleware('auth:sanctum');

// route api
Route::get('/so', [SoController::class, 'index']);
Route::get('/so/{id}', [SoController::class, 'show']);
Route::post('/so', [SoController::class, 'store']);
Route::put('/so/{id}', [SoController::class, 'update']);