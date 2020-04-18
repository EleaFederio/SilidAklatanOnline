<?php

namespace App\Http\Controllers\Api;

use App\Book;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Books extends Controller
{
    public function index(){
        return Book::all();
    }

    public function borrowBook(Request $request){
        $student = Student::find($request->studentId);
        $book = Book::find($request->bookIdNumber);

        if($student == null){
            return response()->json([
                'message' => 'empty Student',
            ]);
        }
        if($book == null){
            return response()->json([
                'message' => 'book not found',
            ]);
        }
        if($student != null && $book != null){
            $student->books()->attach($book);
            return response()->json([
                'success' => true,
                'message' => 'Book borrow request sent.',
            ]);
        }
    
        // 
        

    }
}
