<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('events', EventController::class);
Route::resource('communities', CommunityController::class);
