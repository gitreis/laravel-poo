<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\UserController;

Route::get('/credits', function () {
  return view('credits');
});

Route::get('/inventories', function () {
  return view('inventories');
});

Route::get('/products', [ProductsController::class, 'request']);
Route::post('/products', [ProductsController::class, 'store']);
Route::delete('/products', [ProductsController::class, 'delete']);

Route::get('/', [HomeController::class, 'request']);
Route::get('/users', [UserController::class, 'request']);
Route::get('/categories', [CategoriesController::class, 'request']);
Route::get('/subcategories', [SubcategoriesController::class, 'request']);
