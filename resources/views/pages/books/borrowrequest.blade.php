@extends('layouts.main')

@section('content')

    <h1>Book Borrow Manager</h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" href="/book/borrowrequest">Borrow Request</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/book/borrow/approved">Borrowed Books</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Retured Books</a>
        </li>
    </ul>

    <table class="display" id="table_id">
        <thead>
            <tr>
            <th scope="col">Borrower</th>
            <th scope="col">Book</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrowRequest as $request)
                <tr>
                    <td> <h6 style="margin-bottom:0%"><strong>{{ $request->firstname.' '.$request->lastname}}</strong></h6> <p>{{ $request->course.' '.$request->year }}</p></td>
                    <td>
                        <h6 style="margin-bottom:0%"><strong>{{ $request->title }}</strong></h6>
                        <p style="margin-bottom:0%">Author: {{ $request->author }}</p>
                        <p style="margin-bottom:0%">Publisher: {{ $request->publisher }}</p>
                        <span class="badge {{ $request->name == 'request' ? 'bg-secondary' : 'bg-success' }} text-dark">{{ $request->name }}</span>
                    </td>
{{--                    <td><a href="{{ url('book/borrow_request/approved/')."/".$request->id }}" class="btn btn-primary btn-sm">Approve</a></td>--}}
                    <td>
                        <form action="{{ url("book/borrow_request/approved/").'/'.$request->id }}" method="POST"> @csrf @method('POST') <input type="submit" name="submit" value="{{ $request->name == 'request' ? 'Approve' : 'Borrow' }}" class="btn btn-primary btn-sm" id=""> </form>
                    </td>
                    <td><form action="{{ url("books").'/'.$request->id }}" method="POST"> @csrf @method('DELETE') <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm" id=""> </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
