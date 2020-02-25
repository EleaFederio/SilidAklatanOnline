<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Book;
use PDF;

class ReportGenerator extends Controller
{
    public function studentsList(){
        $students = Student::all();
        $pdf = PDF::loadview('pages/generate/student_list', ['students' => $students])->setPaper('legal');
        return $pdf->stream('students.pdf');
        // return view('pages/generate/student_list')->with('students', $students);
    }
}
