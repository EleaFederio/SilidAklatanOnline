<?php

namespace App\Http\Controllers;

use App\Exports\BookExport;
use Illuminate\Http\Request;

use App\Student;
use App\Book;
use Maatwebsite\Excel\Excel;
use PDF;

class ReportGenerator extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function studentsList(){
        $students = Student::all();
        $pdf = PDF::loadview('generate/student_list', ['students' => $students])->setPaper('legal');
        return $pdf->stream('students.pdf');
        // return view('pages/generate/student_list')->with('students', $students);
    }

    public function coreBookCollection(){
        $books = Book::all();
        $pdf = PDF::loadview('generate/core-book-collection', ['books' => $books])->setPaper('letter');
        return $pdf->stream('core_book_collection.pdf');
    }

    public function book_export(){
        return Excel::download(new BookExport, 'booksReport.csv');
    }

    public function book_records(){
        $data = Book::all();
        return view('generate.booklist',['books'=>$data]);
    }
}
