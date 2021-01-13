<?php

namespace App\Http\Controllers\Api;

use App\Book;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Books extends Controller
{
    public function index(){
        return Book::all();
    }

    public function bookSearch(Request $request)
    {
        $searchKey = $request->title;
        $searchResult = Book::where('title', 'like', '%' . $searchKey . '%')
            ->orWhere('author', 'like', '%' . $searchKey . '%')->paginate(10);
        return $searchResult;

    }

    public function borrowBook(Request $request){
        $student = Student::find($request->studentId);
        $book = Book::find($request->bookIdNumber);

        if($student == null){
            return response()->json([
                'success' => false,
                'message' => 'empty Student',
            ]);
        }
        if($book == null){
            return response()->json([
                'success' => false,
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
    }

    public function borrowBookList(Request $request){

        $data = DB::table('book_student')
        ->join('students', 'students.id', 'book_student.student_id')
        ->join('books', 'books.id', 'book_student.book_id')
        ->select('students.firstname', 'books.title', 'books.author', 'books.image_url', 'book_student.id', 'book_student.created_at')
        ->where('students.id', $request->studentId)
        ->get();

        return response()->json([
            'success' => true,
            'booktobeborrow' => $data,
        ]);

    }


}
