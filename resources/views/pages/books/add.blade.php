@extends('layouts.main')

@section('content')

<h2 class="h2">New Book</h2>

<!-- Modals -->
<div class="jumbotron"
     style="
        background-color: #BBE1FA !important;
    "
>

{{--    @if($errors->any())--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <li> {{ $error }}  </li>--}}
{{--        @endforeach--}}
{{--    @endif--}}

{{--    @if (session('errors'))--}}
{{--        @foreach ($errors as $error)--}}
{{--            <li> {{ $error }}  </li>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    @if (session('success'))--}}
{{--        {{ session('success') }}--}}
{{--    @endif'--}}

    <form action={{ url("books") }} method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-5">
            <div class="book-pic">
                <img src=" {{ url('images/nobookcover.jpg') }} " id="bookpic" alt="" width="350">
                <input type="file" onchange="imagePreview.call(this)" id="file" name="book_image"  value="upload picture">
                <label for="file" class="file-button" ><i class="fas fa-camera-retro" style="paddin-right:10px"></i> Choose a photo</label>
            </div>
        </div>
        <div class="col-md-7">
            <div class="form-group col-md-6">
            <label>Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Book Title...">
                <div class="invalid-feedback">@error('title'){{$message}}@enderror</div>
            </div>
            <div class="form-group col-md-6">
                <label>Author</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" placeholder="Author's Name...">
                <div class="invalid-feedback">@error('author'){{$message}}@enderror</div>
            </div>
            <div class="form-group col-md-10">
                <label>Publisher</label>
                <input type="text" class="form-control @error('publisher') is-invalid @enderror" name="publisher" placeholder="Publishers Name...">
                <div class="invalid-feedback">@error('publisher'){{$message}}@enderror</div>
            </div>
            <div class="form-row col-md-10">
                <div class="form-group col-md-4">
                <label for="inputCity">Call Number</label>
                <input type="text" class="form-control" name="call_number" placeholder="Call Number...">
                </div>
                <div class="form-group col-md-8">
                <label for="inputState">ISBN</label>
                <input type="text" class="form-control" name="isbn" placeholder="ISBN..." >
                </div>
            </div>
            <div class="form-row col-md-10">
                <div class="form-group col-md-2">
                <label for="inputCity">Edition</label>
                <input type="text" class="form-control" name="edition" placeholder="Edition">
                </div>
                <div class="form-group col-md-2">
                <label for="inputState">Pages</label>
                <input type="text" class="form-control" name="pages" placeholder="Pages..." >
                </div>
                <div class="form-group col-md-2">
                <label for="inputState">Copies</label>
                <input type="text" class="form-control" name="copies" placeholder="Copies..." >
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">Year</label>
                <input type="text" class="form-control" name="year" placeholder="Year...">
                </div>
                <div class="form-group col-md-4">
                <label for="inputZip">Remarks</label>
                <input type="text" class="form-control" name="remarks" placeholder="Remarks...">
                </div>
            </div>
            <div class="form-row col-md-10">
                <div class="form-group col-md-4">
                    <input type="submit" class="btn btn-primary" value="Add Book">
                </div>
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
