<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('blog', PostController::class)
        ->parameter('blog', 'post')
        ->names('posts');
});


