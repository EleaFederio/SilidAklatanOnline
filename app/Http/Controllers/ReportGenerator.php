<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use PDF;

class ReportGenerator extends Controller
{
    public function studentsList(){
        $students = Student::all();
        $pdf = PDF::loadview('pages/generate/student_list', $students);
        return $pdf->download('students.pdf');
    }
}
