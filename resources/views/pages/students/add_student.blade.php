@extends('layouts.main')

@section('content')

<h1>Student Data</h1>
    
<form action={{ url("students") }} method="POST">
    @csrf
    <h6>Student Name</h6>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your First Name Here...">
      </div>
      <div class="form-group col-md-3">
        <label for="middlename">Middle Name</label>
        <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Your Middle Name Here...">
      </div>
      <div class="form-group col-md-3">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your Last Name Here...">
      </div>
      <div class="form-group col-md-2">
        <label for="BirthDay">Birth Day</label>
        <input type="date" class="form-control" id="BirthDay" name="birthday" placeholder="Your Birth day Here...">
      </div>
    </div>

    <h6>Address</h6>
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <label for="Barangay">Barangay</label>
            <input type="text" class="form-control" id="Barangay" name="barangay" placeholder="Your Barangay Here...">
        </div>
        <div class="form-group col-md-3">
            <label for="Town">Town</label>
            <input type="text" class="form-control" id="Town" name="town" placeholder="Your Town Here...">
        </div>
        <div class="form-group col-md-3">
            <label for="Province">Province</label>
            <input type="text" class="form-control" id="Province" name="province" placeholder="Your Province Here...">
        </div>
        <div class="form-group col-md-3">
            <label for="zipcode">ZIP CODE</label>
            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Your ZIP CODE Here...">
        </div>
    </div>


    <h6>Contact</h6>
    <div class="form-row">
        
        <div class="form-group col-md-2">
            <label for="Phone">Phone Number</label>
            <input type="text" class="form-control" id="Phone" name="phone" placeholder="Your Phone Number Here...">
        </div>
        <div class="form-group col-md-8">
            <label for="Email">Email Address</label>
            <input type="text" class="form-control" id="Email" name="email" placeholder="Your Email Address Here...">
        </div>
    </div>

    <h6>***</h6>
    <div class="form-row">
        
        <div class="form-group col-md-4">
            <label for="studentid">Student ID</label>
            <input type="text" class="form-control" id="studentid" name="studentid" placeholder="Your Student ID Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="course">Course</label>
            <input type="text" class="form-control" id="course" name="course" placeholder="Your Course Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="Your Year Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="block">Block</label>
            <input type="text" class="form-control" id="block" name="block" placeholder="Your Block Here...">
        </div>
        <div class="form-group col-md-2">
            <label for="major">Major</label>
            <input type="text" class="form-control" id="major" name="major" placeholder="Your Major Here...">
        </div>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">ADD STUDENT</button>
</form>

@endsection