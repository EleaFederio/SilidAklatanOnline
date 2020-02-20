@extends('layouts.main')

@section('content')
<i class="fas fa-user-plus"></i>

    <h1>BUGC Students</h1>
    <a href="students/create">ADD STUDENT</a>
    <table class="display" id="table_id">
    <thead>
        <tr>
        <th scope="col">Student ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Middle</th>
        <th scope="col">Course</th>
        <th scope="col">Year</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->middlename }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year }}</td>
                <td><a href={{ url('students//') }}{{ "/".$student->id.'/edit' }}>Edit</a></td>
                <td><a href={{ url('students//') }}{{ "/".$student->id }}>View</a></td>
            </tr>
        @endforeach
    </tbody>
    </table>

    

@endsection