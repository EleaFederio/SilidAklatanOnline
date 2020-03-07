@extends('layouts.main')

@section('content')
    <h1 class="text-center">Change my Password</h1>

    <div class="col-md-9">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Old Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Old Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <br>
            <div class="form-group">
                <label for="formGroupExampleInput">New Username</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">New Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Confirm New Password</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-block" name="" id="">
        </form>
    </div>


@endsection
