<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LiteratureController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('landing');

Route::resource('events', EventController::class);
Route::resource('communities', CommunityController::class);
Route::resource('literatures', LiteratureController::class);
