<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\CommunityController;
use App\Http\Controllers\Api\LiteratureController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Test endpoint for CORS
Route::get('/test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'CORS is working! API ready for Nuxt frontend',
        'timestamp' => now()->toISOString(),
        'server' => request()->getHttpHost(),
    ]);
});

// Health check endpoint
Route::get('/health', function () {
    return response()->json([
        'status' => 'healthy',
        'database' => 'connected',
        'timestamp' => now()->toISOString(),
    ]);
});

// Event API Routes
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index']);
    Route::post('/', [EventController::class, 'store']);
    Route::get('/categories', [EventController::class, 'categories']);
    Route::get('/upcoming', [EventController::class, 'upcoming']);
    Route::get('/{id}', [EventController::class, 'show']);
    Route::put('/{id}', [EventController::class, 'update']);
    Route::delete('/{id}', [EventController::class, 'destroy']);
});

// Community API Routes
Route::prefix('communities')->group(function () {
    Route::get('/', [CommunityController::class, 'index']);
    Route::post('/', [CommunityController::class, 'store']);
    Route::get('/{id}', [CommunityController::class, 'show']);
    Route::put('/{id}', [CommunityController::class, 'update']);
    Route::delete('/{id}', [CommunityController::class, 'destroy']);
    Route::post('/{id}/join', [CommunityController::class, 'join']);
    Route::post('/{id}/leave', [CommunityController::class, 'leave']);
});

// Literature API Routes
Route::prefix('literatures')->group(function () {
    Route::get('/', [LiteratureController::class, 'index']);
    Route::post('/', [LiteratureController::class, 'store']);
    Route::get('/authors', [LiteratureController::class, 'authors']);
    Route::get('/top-rated', [LiteratureController::class, 'topRated']);
    Route::get('/most-bookmarked', [LiteratureController::class, 'mostBookmarked']);
    Route::get('/by-category', [LiteratureController::class, 'byCategory']);
    Route::get('/{id}', [LiteratureController::class, 'show']);
    Route::put('/{id}', [LiteratureController::class, 'update']);
    Route::delete('/{id}', [LiteratureController::class, 'destroy']);
});
