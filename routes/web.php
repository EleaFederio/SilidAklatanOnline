<?php
use \App\Http\Controllers\ReportGenerator;
use \App\Http\Controllers\BooksController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\Auth\ChangePasswordController;
use \App\Http\Controllers\StudentsController;
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
//
//Route::get('/', function () {
//    return view('pages.home');
//});
//Route::get('/studentcenter', 'StudentCenter@showPage');
//Route::livewire('home', 'student-home');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('students', 'StudentsController');
Route::resource('books', 'BooksController' );
Route::get('students_list', [ReportGenerator::class, 'studentsList']);
Route::get('book_records', [ReportGenerator::class, 'coreBookCollection']);
Route::get('bookrecords', [ReportGenerator::class, 'book_export']);
Route::get('book/borrowrequest', [BooksController::class, 'borrowBookRequestList']);
Route::get('book/borrowapproved', [BooksController::class, 'borrowBookApprovedList']);
Route::get('book/request', [BooksController::class, 'request']);

//Reset Student Password using sms
Route::post('student/password/reset/{id}', [StudentsController::class, 'smsResetPassword'])->name('student.resetPassword');



Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

//Route Form CSV Import
Route::post('/book/import', [BooksController::class, 'import'])->name('book.import');



Route::get('/about', function () {
    return view('pages.about');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/change_password', [ChangePasswordController::class, 'index']);
