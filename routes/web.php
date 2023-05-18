<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[HomeController::class, 'index']);
Route::get('/',[HomeController::class, 'home']);
Route::get('about/{id?}',[HomeController::class,'about']);

//products route
Route::get('products',[ProductController::class,'index']);


//categories route
Route::get('category',[CategoryController::class,'index']);
Route::get('category/create',[CategoryController::class,'create']);
Route::post('category',[CategoryController::class,'store']);
Route::get('category/{id}/edit',[CategoryController::class,'edit']);
Route::put('category/{id}/',[CategoryController::class, 'update']);
Route::delete('category/delete/{id}',[CategoryController::class, 'destroy']);