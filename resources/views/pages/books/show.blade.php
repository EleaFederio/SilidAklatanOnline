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
        <h2 class="details-info">Purpose Driven Life</h2>
        <p class="detail-title">Author</p>
        <h6 class="details-info">Rick Warren</h6>
        <p class="detail-title">Publisher</p>
        <h6 class="details-info">Zondervan</h6>
        <p class="detail-title">Call Number</p>
        <h6 class="details-info"><strong>501.00</strong></h6>
        <p class="detail-title">ISBN</p>
        <h6 class="details-info">124112485512</h6>
        <p class="detail-title">Edition</p>
        <h6 class="details-info">1st</h6>
        <p class="detail-title">Available Copies</p>
        <h6 class="details-info">10</h6>
        <p class="detail-title">Number of Pages</p>
        <h6 class="details-info">205</h6>
        <p class="detail-title">Remarks</p>
        <h6 class="details-info">Good</h6>
        </div>
    </div>
</div>

@endsection