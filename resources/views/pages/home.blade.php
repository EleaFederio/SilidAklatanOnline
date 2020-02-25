@extends('layouts.main')

@section('content')
    <h1 class="text-center">Home</h1>

    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Students Library Activities</div>
        <div class="card-body"><canvas id="myAreaChart" width="75%" height="20"></canvas></div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <script src="{{ url('js/chartDesign.js') }}"></script>
    
    
@endsection