<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('pages/students/students')->with('students', $students);
    }

    public function store(Request $request){
        echo $request->studentid;
        Student::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'b_day' => $request->birthday,
            'student_id' => $request->studentid,
            'street_brgy' => $request->barangay,
            'town' =>  $request->town,
            'province' => $request->province,
            'zip_code' => $request->zipcode,
            'phone' => $request->phone,
            'email' => $request->email,
            'course' => $request->course,
            'year' => $request->year,
            'block' => $request->block,
            'major' => $request->major
        ]);
        $students = Student::all();
        return view('pages/students/students')->with('students', $students);
    }

    public function create(){
        return view('pages/students/add_student');
    }

    public function show($id){
        $student = Student::find($id);
        return view('pages/students/show')->with('student', $student);
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->firstname = $request->firstname;
        $student->middlename = $request->middlename;
        $student->lastname = $request->lastname;
        $student->street_brgy = $request->street_brgy;
        $student->student_id = $request->student_id;
        $student->town = $request->town;
        $student->province = $request->province;
        $student->zip_code = $request->zip_code;
        $student->b_day = $request->b_day;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->block = $request->block;
        $student->major = $request->major;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();
        $students = Student::all();
        return view('pages/students/students')->with('students', $students);
    }

    public function destroy($id){

    }

    public function edit($id){
        $student = Student::find($id);
        return view('pages/students/edit')->with('student', $student);
    }
}
