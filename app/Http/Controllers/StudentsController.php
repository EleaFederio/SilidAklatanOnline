<?php
// Fix test
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $students = Student::all();
        return view('pages/students/students')->with('students', $students);
    }

    public function store(Request $request){
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
        $student->street_brgy = $request->barangay;
        $student->student_id = $request->studentid;
        $student->town = $request->town;
        $student->province = $request->province;
        $student->zip_code = $request->zipcode;
        $student->b_day = $request->birthday;
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
        Student::destroy($id);
        $students = Student::all();
        return view('pages/students/students')->with('students', $students);
    }

    public function edit($id){
        $student = Student::find($id);
        return view('pages/students/edit')->with('student', $student);
    }
}
