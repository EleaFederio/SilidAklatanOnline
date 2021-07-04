<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Books;
use App\Http\Controllers\Api\StudentAuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//   return $request->user();
//});

Route::get('books', [Books::class, 'index']);
Route::post('books/search', [Books::class, 'bookSearch']);
Route::post('borrow_book', [Books::class, 'borrowBook']);
Route::post('borrowed_books', [Books::class, 'borrowBookList']);

Route::post('login', [StudentAuthController::class, 'login']);
Route::post('register', [StudentAuthController::class, 'register']);
Route::get('/student', [StudentAuthController::class, 'details'])->middleware('auth:sanctum');

