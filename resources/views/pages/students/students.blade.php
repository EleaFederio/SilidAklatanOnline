@extends('layouts.main')

@section('content')
    <h1>Students Page</h1>
    <a href="students/create">ADD STUDENT</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Student ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Middle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->middlename }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>

    

@endsection