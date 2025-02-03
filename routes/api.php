<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(RegisterController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{id}', [ProductController::class, 'show']);
    // Route::post('logout', 'logout');
});

Route::middleware('auth:sanctum')->group(function () {
    // Route::resource('products', ProductController::class);
    Route::post('products', [ProductController::class, 'store']);
    Route::put('products/{product}', [ProductController::class, 'update']);
    Route::post('products/{product}', [ProductController::class, 'destroy']);
    Route::post('logout', [RegisterController::class, 'logout']);
});
