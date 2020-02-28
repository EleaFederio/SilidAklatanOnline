@extends('layouts.main')

@section('content')

<div class="container" style="margin-top: 5%">
    <div class="row">
        <div class="col-md-5">
        <div class="book-pic">
            <img src="{{ $books->image_url == null ? url('images/nobookcover.jpg') : url('images').'/'.$books->image_url }}" alt="" width="350">
        </div>
        </div>
        <div class="col-md-7">
        <p class="detail-title">Title</p>
        <h2 class="details-info"> <strong>{{ $books->title }}</strong> </h2>
        <p class="detail-title">Author</p>
        <h6 class="details-info">{{ $books->author }}</h6>
        <p class="detail-title">Publisher</p>
        <h6 class="details-info">{{ $books->publisher }}</h6>
        <p class="detail-title">Call Number</p>
        <h6 class="details-info"><strong>{{ $books->call_number }}</strong></h6>
        <p class="detail-title">ISBN</p>
        <h6 class="details-info">{{ $books->isbn }}</h6>
        <p class="detail-title">Edition</p>
        <h6 class="details-info">{{ $books->edition }}</h6>
        <p class="detail-title">Available Copies</p>
        <h6 class="details-info">{{ $books->copies }}</h6>
        <p class="detail-title">Number of Pages</p>
        <h6 class="details-info">{{ $books->pages }}</h6>
        <p class="detail-title">Remarks</p>
        <h6 class="details-info">{{ $books->remarks }}</h6>
        </div>
    </div>
</div>

@endsection