<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('songs/search', [SongController::class, 'search']);
Route::apiResource('songs', SongController::class);

