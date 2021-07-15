@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                Settings
            </div>
            <div class="card-body">
                <form action="{{ url('settings') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label>Library Name</label>
                        <input type="text" class="form-control" name="library_name" placeholder="Enter Library Name...">
                    </div>
                    <div class="form-group">
                        <label>Library Address</label>
                        <input type="text" class="form-control" name="library_address" placeholder="Enter Library Address...">
                    </div>
                    <div class="form-group">
                        <label>Librarians Name</label>
                        <input type="text" class="form-control" name="librarians_name" placeholder="Enter Librarians Name...">
                    </div>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>

@endsection
