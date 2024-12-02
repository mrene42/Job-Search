@extends('layouts.app')
@section('content')
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Offer</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($jobs as $job)
                 <tr>
                     <td>{{$job->id}}</td>
                     <td>{{$job->created_at}}</td>
                     <td>{{$job->offer}}</td>
                     <td>{{$job->company}}</td>
                     <td>{{$job->description}}...</td>
                     <td>{{$job->status}}</td>
                     <td>
                        <a href="{{ route('showDetail', ['id' => $job->id]) }}">
                            <button type="button" class="btn">Show</button>
                        </a>
                    </td>
                 </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection