@extends('layouts.main')

@section('content')

<h1>Edit this Book</h1>

<!-- Modals -->
<div class="modal-body">
    <form action={{ url("books").'/'.$books->id }} method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="col-md-5">
            <div class="book-pic">
                <img src="{{ $books->image_url == null ? url('images/nobookcover.jpg') : url('images').'/'.$books->image_url }}" id="bookpic" alt="" width="350">
                <input type="file" onchange="imagePreview.call(this)" id="file" name="book_image"  value="upload picture">
                <label for="file" class="file-button" ><i class="fas fa-camera-retro" style="paddin-right:10px"></i> Choose a photo</label>
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group col-md-6">
            <label>Title</label>
        <input type="text" class="form-control" name="title" value="{{ $books->title }}" placeholder="Book Title...">
            </div>
            <div class="form-group col-md-6">
                <label>Author</label>
                <input type="text" class="form-control" name="author" value="{{ $books->author }}" placeholder="Author's Name...">
            </div>
            <div class="form-group col-md-10">
                <label>Publisher</label>
                <input type="text" class="form-control" name="publisher" value="{{ $books->publisher }}" placeholder="Publishers Name...">
            </div>
            <div class="form-row col-md-10">
                <div class="form-group col-md-4">
                <label for="inputCity">Call Number</label>
                <input type="text" class="form-control" name="call_number" value="{{ $books->call_number }}" placeholder="Call Number...">
                </div>
                <div class="form-group col-md-8">
                <label for="inputState">ISBN</label>
                <input type="text" class="form-control" name="isbn" value="{{ $books->isbn }}" placeholder="ISBN..." >
                </div>
            </div>
            <div class="form-row col-md-10">
                <div class="form-group col-md-2">
                <label for="inputCity">Edition</label>
                <input type="text" class="form-control" name="edition" value="{{ $books->edition }}" placeholder="Edition">
                </div>
                <div class="form-group col-md-2">
                <label for="inputState">Pages</label>
                <input type="text" class="form-control" name="pages" value="{{ $books->pages }}" placeholder="Pages..." >
                </div>
                <div class="form-group col-md-2">
                <label for="inputState">Copies</label>
                <input type="text" class="form-control" name="copies" value="{{ $books->copies }}" placeholder="Copies..." >
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">Year</label>
                <input type="text" class="form-control" name="year" value="{{ $books->year }}" placeholder="Year...">
                </div>
                <div class="form-group col-md-4">
                <label for="inputZip">Remarks</label>
                <input type="text" class="form-control" name="remarks"value="{{ $books->remarks }}" placeholder="Remarks...">
                </div>
            </div>
            <div class="form-row col-md-10">
                <input type="submit" class="btn btn-primary" value="Update Book">
            </div>
        </div>
    </div>
    </form>
</div>

<script>
    function imagePreview(){
        var reader = new FileReader();
        var imageField = document.getElementById("bookpic");
        reader.onload = function(){
            if(reader.readyState == 2){
                imageField.src = reader.result;
            }
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
