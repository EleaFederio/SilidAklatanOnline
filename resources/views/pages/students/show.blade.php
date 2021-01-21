@extends('layouts.main')

@section('content')

<div class="container">
    <h1>{{ $student->firstname.' '.$student->lastname }}</h1>
    <a href="" class="btn btn-primary btn-sm">View Clearance</a>
    <br>
    <br>
    <div class="row">
        <div class="col-2">
            <p><strong>First Name:</strong></p>
            <p><strong>Middle Name:</strong></p>
            <p><strong>Last Name:</strong></p>
            <p><strong>Address:</strong></p>
            <p><strong>ZIP CODE:</strong></p>
            <p><strong>Phone Number:</strong></p>
            <p><strong>Email Address:</strong></p>
        </div>
        <div class="col-4">
            <p> {{ $student->firstname }} </p>
            <p> {{ $student->middlename == null ? 'No Data' : $student->middlename }} </p>
            <p> {{ $student->lastname }} </p>
            <p> {{ $student->street_brgy.', '.$student->town.', '.$student->province }} </p>
            <p> {{ $student->zip_code == null ? 'No Data' : $student->zip_code }} </p>
            <p> {{ $student->phone == null ? 'No Data' : $student->phone }} </p>
            <p> {{ $student->email }} </p>
        </div>
        <div class="col-2">
            <p><strong>Course:</strong></p>
            <p><strong>Year:</strong></p>
            <p><strong>Block:</strong></p>
            <p><strong>Major:</strong></p>
        </div>
        <script>

        </script>
        <div class="col-3">
            <p> {{ $student->course }} </p>
            <p> {{ $student->year }} </p>
            <p> {{ $student->block == null ? 'No Data' : $student->block }} </p>
            <p> {{ $student->major == null ? 'No Data' : $student->major }} </p>
{{--            {{ dd(url()) }}--}}
            <form method="post" action="{{ route('student.resetPassword', ['id' => $student->id])  }}">
                @csrf
                <input type="submit" class="btn btn-info" value="send">
            </form>
        </div>
    </div>

</div>
@endsection
