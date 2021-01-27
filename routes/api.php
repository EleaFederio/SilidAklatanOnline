<?php

use Illuminate\Http\Request;
use \App\Http\Controllers\Api\UserController;

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

Route::get('books', 'Api\Books@index');
Route::post('books/search', 'Api\Books@bookSearch');
Route::post('borrow_book', 'Api\Books@borrowBook');
Route::get('borrowed_books/{studentId}', 'Api\Books@borrowBookList');

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::get('/student', [UserController::class, 'details'])->middleware('auth:sanctum');

