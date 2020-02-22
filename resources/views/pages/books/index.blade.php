@extends('layouts.main')

@section('content')

    <h1>BUGC Students</h1>
    <a href="books/create">ADD BOOK</a>
    <table class="display" id="table_id">
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Publisher</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td><a href="{{ url('students')."/".$book->id }}" class="btn btn-primary btn-sm">View</a></td>
                <td><a href="{{ url('students')."/".$book->id.'/edit' }}" class="btn btn-secondary btn-sm">Edit</a></td>
                <td><form action="{{ url("students").'/'.$book->id }}" method="POST"> @csrf @method('DELETE') <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm" id=""> </form></td>
            </tr>
        @endforeach
    </tbody>
    </table>

    

@endsection