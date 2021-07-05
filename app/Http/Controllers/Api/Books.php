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


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * sample API
     *
     */
    public function borrowBook(Request $request){
        $student = Student::find($request->studentId);
        $book = Book::find($request->bookIdNumber);

        //Check if the student exist in the database
        if($student == null){
            return response()->json([
                'success' => false,
                'message' => 'empty Student',
            ]);
        }
        //Check if the book exist in the database
        if($book == null){
            return response()->json([
                'success' => false,
                'message' => 'book not found',
            ]);
        }

        if($student != null && $book != null){
            $isBookExist = DB::table('book_student')
                ->where('student_id', $request->studentId)
                ->where('book_id', $request->bookIdNumber)
                ->get();
            // Check if book is already borrowed by the user
            if(!sizeof($isBookExist) == 0){
                return response()->json([
                    'success' => false,
                    'message' => 'Book already borrowed',
                ]);
            }
            $student->books()->attach($book);
            return response()->json([
                'success' => true,
                'message' => 'Book borrow request sent.',
            ]);
        }
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     * sample API body
     *  {
     *      "studentId" : 2
     *  }
     *
     */
    public function borrowBookList(Request $request){

        //Check if the student exist in the database
        if(Student::find($request->studentId) == null){
            return response()->json([
                'success' => false,
                'message' => 'Student doesn\'t exist' ,
            ]);
        }

        // if the student exist in the database => find the books that he/she borrows
        $data = DB::table('book_student')
        ->join('students', 'students.id', '=','book_student.student_id')
        ->join('books', 'books.id','='  ,'book_student.book_id')
        ->select('students.firstname', 'books.title', 'books.author', 'books.image_url', 'book_student.id', 'book_student.created_at')
        ->where('students.id', $request->studentId)
        ->get();

        // then return the result
        return response()->json([
            'success' => true,
            'booktobeborrow' => $data,
        ]);

    }


}
