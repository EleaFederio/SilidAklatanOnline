@extends('layouts.main')

@section('content')

<h1>Student Data</h1>
    
<form action={{ url("students").'/'.$student->id }} method="POST">
    @csrf
    @method('PUT')
    <h6>Student Name</h6>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value={{ $student->firstname }} placeholder="Your First Name Here...">
      </div>
      <div class="form-group col-md-3">
        <label for="middlename">Middle Name</label>
        <input type="text" class="form-control" id="middlename" name="middlename" value={{ $student->middlename }} placeholder="Your Middle Name Here...">
      </div>
      <div class="form-group col-md-3">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value={{ $student->lastname }} placeholder="Your Last Name Here...">
      </div>
      <div class="form-group col-md-2">
        <label for="BirthDay">Birth Day</label>
        <input type="date" class="form-control" id="BirthDay" name="birthday" value={{ $student->b_day }} placeholder="Your Birth day Here...">
      </div>
    </div>

    <h6>Address</h6>
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <label for="Barangay">Barangay</label>
            <input type="text" class="form-control" id="Barangay" name="barangay" value={{ $student->street_brgy }} placeholder="Your Barangay Here...">
        </div>
        <div class="form-group col-md-3">
            <label for="Town">Town</label>
            <input type="text" class="form-control" id="Town" name="town" value={{ $student->town }} placeholder="Your Town Here...">
        </div>
        <div class="form-group col-md-3">
            <label for="Province">Province</label>
            <input type="text" class="form-control" id="Province" name="province" value={{ $student->province }} placeholder="Your Province Here...">
        </div>
        <div class="form-group col-md-3">
            <label for="zipcode">ZIP CODE</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" value={{ $student->zip_code }} placeholder="Your ZIP CODE Here...">
        </div>
    </div>


    <h6>Contact</h6>
    <div class="form-row">
        
        <div class="form-group col-md-2">
            <label for="Phone">Phone Number</label>
            <input type="text" class="form-control" id="Phone" name="phone" value={{ $student->phone }} placeholder="Your Phone Number Here...">
        </div>
        <div class="form-group col-md-8">
            <label for="Email">Email Address</label>
            <input type="text" class="form-control" id="Email" name="email" value={{ $student->email }} placeholder="Your Email Address Here...">
        </div>
    </div>

    <h6>***</h6>
    <div class="form-row">
        
        <div class="form-group col-md-4">
            <label for="studentid">Student ID</label>
            <input type="text" class="form-control" id="studentid" name="studentid" value={{ $student->student_id }} placeholder="Your Student ID Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="course">Course</label>
            <input type="text" class="form-control" id="course" name="course" value={{ $student->course }} placeholder="Your Course Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" value={{ $student->year }} placeholder="Your Year Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="block">Block</label>
            <input type="text" class="form-control" id="block" name="block" value={{ $student->block }} placeholder="Your Block Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="major">Major</label>
            <input type="text" class="form-control" id="major" name="major" value={{ $student->major }} placeholder="Your Major Here...">
        </div>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">UPDATE STUDENT</button>
</form>

@endsection