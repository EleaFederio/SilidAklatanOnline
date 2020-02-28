@extends('layouts.main')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Publisher</th>
        </tr>
        </thead>
        <tbody>
        <a href="{{url('/bookrecords')}}"> Download Excel</a>

        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection