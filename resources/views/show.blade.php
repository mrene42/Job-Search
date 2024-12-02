@extends('layouts.app')
@section('content')
    <a href="{{ route("home")}}" class="btnSecondary">Back</a>
    <div id="offerShow">
        <h3>{{$job->offer}}</h3>
        <h4>{{$job->company}}</h4>
    </div>
    <div>
        <p>{{$job->description}}</p>
        <h5>{{$job->status}}</h5>
    </div>
@endsection