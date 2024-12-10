@extends('layouts.app')
@section('content')
    <a href="{{ route("home")}}">
        <button class="btnSecondary">Back</button>
    </a>
    <div id="offerShow">
            <h3>{{$job->offer}}</h3>
            <h4>{{$job->company}}</h4>
            <p>{{$job->description}}</p>
            <h5>{{$job->status}}</h5>
    </div>
    
    <div>
        <h2>Follow Job</h2>
        <table class="tableFollow">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Job ID</th>
                    <th>date</th>
                    <th>News</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($job->follows as $follow)
                    <tr>
                        <td>{{$follow->id}}</td>
                        <td>{{$follow->job_id}}</td>
                        <td>{{$follow->created_at->format('d/m/y')}}</td>
                        <td>{{$follow->news}}</td>
                    </tr> 
                @endforeach
                
                @if (!($job->follows)->isEmpty())
                @else
                    <tr>
                        <td>❌No hay seguimiento❌</td>
                    </tr>
                @endif 
            </tbody>
        </table>
    </div>
@endsection