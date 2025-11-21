<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\CommunityController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Event API Routes
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index']);
    Route::post('/', [EventController::class, 'store']);
    Route::get('/{id}', [EventController::class, 'show']);
    Route::post('/{id}', [EventController::class, 'update']);
    Route::delete('/{id}', [EventController::class, 'destroy']);
});

// Community API Routes
Route::prefix('communities')->group(function () {
    Route::get('/', [CommunityController::class, 'index']);
    Route::post('/', [CommunityController::class, 'store']);
    Route::get('/{id}', [CommunityController::class, 'show']);
    Route::post('/{id}', [CommunityController::class, 'update']);
    Route::delete('/{id}', [CommunityController::class, 'destroy']);
});
