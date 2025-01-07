<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/stock/{id}',[StockController::class, "getStockByBook"]);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);

Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('books',[BookController::class, "getAllBooks"]);
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);
});

