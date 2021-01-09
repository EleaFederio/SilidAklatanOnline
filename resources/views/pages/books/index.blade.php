@extends('layouts.main')

@section('content')

    <h1>BUGC Library Books</h1>
    <a href="{{ url('books/create') }}" class="btn btn-secondary btn-sm"><i class="fas fa-book"></i>   ADD BOOK</a>
    <btn class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-import"></i>   IMPORT BOOKS</btn>
    <table class="display mt-5" id="table_id">
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
                    <td><a href="{{ url('books')."/".$book->id }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    <td><a href="{{ url('books')."/".$book->id.'/edit' }}" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></a></td>
                    <td><form action="{{ url("books").'/'.$book->id }}" method="POST"> @csrf @method('DELETE') <button type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm" id=""><i class="fas fa-trash-alt"></i></button> </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Book CSV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>CVS Book format should be like this:</h6>
                <p>title, author, publisher, call_number, isbn, edition, year, pages, copies, remarks, image_url</p>
                <form method="POST" action="{{route('book.import')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="booklist" style="padding: 3px; border: 1px solid grey; border-radius: 3px; ">Choose CSV</label>
                        <input type="file" name="booklist" id="booklist" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>



@endsection
