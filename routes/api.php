<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::apiResource('products', ProductController::class);
Route::get('/users', [UserController::class,'index']);
Route::get('/user/{id}', [UserController::class,'show']);


Route::get('/products', [ProductController::class,'index']);
Route::get('/product/{id}', [ProductController::class,'show']);
Route::get('/products/category/{id}',[ProductController::class,'productsByCategory']);
Route::post('/product',[ProductController::class,'store']);
Route::patch('/product/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'destroy']);


Route::get('categories',[CategoryController::class,'index']);
Route::get('/category/{id}', [CategoryController::class,'show']);
Route::post('/category',[CategoryController::class,'store']);
Route::patch('/category/{id}',[CategoryController::class,'update']);
Route::delete('/category/{id}',[CategoryController::class,'destroy']);


Route::get('orders',[OrderController::class,'index']);
Route::get('/order/{id}', [OrderController::class,'show']);
Route::post('/order',[OrderController::class,'store']);
Route::patch('/order/{id}',[OrderController::class,'update']);
Route::delete('/order/{id}',[OrderController::class,'destroy']);
// Route::get('/post', [PostController::class,'show']);
// Route::get('/post/{id}', [PostController::class,'showId']);
// Route::get('/posts', [PostController::class,'index']);
