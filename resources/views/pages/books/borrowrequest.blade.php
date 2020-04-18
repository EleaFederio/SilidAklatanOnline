@extends('layouts.main')

@section('content')

    <h1>Book Borrow Manager</h1>

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

    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>

@endsection