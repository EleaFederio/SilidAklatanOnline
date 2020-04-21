@extends('layouts.main')

@section('content')

    <h1>Requested Books</h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" href="/book/borrowrequest">Borrow Request</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/book/borrowapproved">Borrowed Books</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Retured Books</a>
        </li>
    </ul>

    <table class="display" id="table_id">
        <thead>
            <tr>
            <th scope="col">Requested Book</th>
            <th scope="col">Requested by</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>AAAAA</td>
                <td>AAAAA</td>
                <td>AAAAA</td>
                <td>AAAAA</td>
            </tr>
        </tbody>
    </table>

@endsection