<?php

use App\Http\Controllers\Api\TransporterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user', function (Request $request) {
//   return $request->user();
// })->middleware('auth:sanctum');

// route api
Route::get('/transporters', [TransporterController::class, 'index']);
Route::get('/transporters/{id}', [TransporterController::class, 'show']);
Route::post('/transporters', [TransporterController::class, 'store']);
Route::put('/transporters/{id}', [TransporterController::class, 'update']);