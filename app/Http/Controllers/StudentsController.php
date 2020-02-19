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
        
    }

    public function create(){
        return view('pages/students/add_student');
    }

    public function show($id){

    }

    public function update(Request $request){

    }

    public function destroy($id){

    }

    public function edit($id){

    }
}
