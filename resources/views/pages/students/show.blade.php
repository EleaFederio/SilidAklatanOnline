@extends('layouts.main')

@section('content')

<div class="container">
    <h1>{{ $student->firstname.' '.$student->lastname }}</h1>
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
            <p> {{ $student->middlename }} </p>
            <p> {{ $student->lastname }} </p>
            <p> {{ $student->street_brgy.', '.$student->town.', '.$student->province }} </p>
            <p> {{ $student->zip_code }} </p>
            <p> {{ $student->phone }} </p>
            <p> {{ $student->email }} </p>
        </div>
        <div class="col-2">
            <p><strong>Course:</strong></p>
            <p><strong>Year:</strong></p>
            <p><strong>Block:</strong></p>
            <p><strong>Major:</strong></p>
        </div>
        <div class="col-3">
            <p> {{ $student->course }} </p>
            <p> {{ $student->year }} </p>
            <p> {{ $student->block }} </p>
            <p> {{ $student->major }} </p>
        </div>
    </div>
</div>
@endsection