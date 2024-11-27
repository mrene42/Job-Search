@extends('layouts.app')
@section('content')
    @foreach ($jobs as $job)
    <div class="card" id = "jobsCard" style="width: 18rem;">
        <img  id = "companyImage" src="..." class="card-img-top" alt="{{$jobs->job}}">
        <div class="card-body">
            <h5 class="card-title"> {{$job->offer}} </h5>
            <h6 class="card-title"> {{$job->company}} </h6>
            <p class="card-text"> {{$job->description}}... </p>
            <p class="card-text"> {{$job->status}} </p>
        </div>
    </div>
    @endforeach
@endsection