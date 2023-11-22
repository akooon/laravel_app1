<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;


Route::prefix('category')->group(function () {
    Route::get('/',[CategoryController::class, 'index']); 
    Route::get('/show/{id}', [CategoryController::class, 'show']);
    Route::post('/store', [CategoryController::class, 'store']);
    Route::put('/update/{id}', [CategoryController::class, 'update']);
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy']);
});


Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class, 'index']); 
    Route::get('/show/{id}', [ProductController::class, 'show']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::put('/update/{id}', [ProductController::class, 'update']);
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy']);

});



Route::prefix('client')->group(function () {
    Route::get('/',[ClientController::class, 'index']); 
    Route::get('/show/{id}', [ClientController::class, 'show']);
    Route::post('/store', [ClientController::class, 'store']);
    Route::put('/update/{id}', [ClientController::class, 'update']);
    Route::delete('/destroy/{id}', [ClientController::class, 'destroy']);
  
});


Route::prefix('order')->group(function () {
    Route::get('/',[OrderController::class, 'index']); 
    Route::get('/show/{id}', [OrderController::class, 'show']);
    Route::post('/store', [OrderController::class, 'store']);
    Route::put('/update/{id}', [OrderController::class, 'update']);
    Route::delete('/destroy/{id}', [OrderController::class, 'destroy']);
});
