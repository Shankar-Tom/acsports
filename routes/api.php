<?php


use Illuminate\Support\Facades\Route;
use Shankar\LaravelBasicSetting\Middleware\ExpectJsonResponse;

Route::middleware(ExpectJsonResponse::class)->group(function () {
    Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('profile', [App\Http\Controllers\Api\ProfileController::class, 'getProfile']);
        Route::post('profile/update', [App\Http\Controllers\Api\ProfileController::class, 'update']);
        Route::resource('news', App\Http\Controllers\Api\NewsController::class);
    });
});
