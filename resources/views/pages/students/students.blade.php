@extends('layouts.main')

@section('content')

    <h1>BUGC Students</h1>
    <a href="students/create" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i>  ADD STUDENT</a>
    <table class="display" id="table_id">
    <thead>
        <tr>
        <th scope="col">Student ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Middle</th>
        <th scope="col">Course</th>
        <th scope="col">Year</th>
        <th scope="col">Options</th>
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
                <td>
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ url('students')."/".$student->id }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="col-4">
                            <a href="{{ url('students')."/".$student->id.'/edit' }}" class="btn btn-secondary btn-sm"><i class="fas fa-user-edit"></i></a>
                        </div>
                        <div class="col-4">
                            <form action="{{ url("students").'/'.$student->id }}" method="POST"> @csrf @method('DELETE') <button type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm" id=""><i class="fas fa-trash-alt"></i></button> </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>



@endsection
