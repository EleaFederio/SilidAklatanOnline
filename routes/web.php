<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('students', 'StudentsController');
Route::resource('books', 'BooksController');
Route::get('students_list', 'ReportGenerator@studentsList');
Route::get('book_records', 'ReportGenerator@book_records');
Route::get('bookrecords', 'ReportGenerator@book_export');




Route::get('/about', function () {
    return view('pages.about');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
