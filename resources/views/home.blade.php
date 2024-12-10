@extends('layouts.app')
@section('content')
    <div>
        <table class="tableJob">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Update</th>
                    <th>Offer</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>News</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($jobs as $job)
                 <tr>
                     <td>{{$job->id}}</td>
                     <td>{{$job->created_at}}</td>
                     <td>{{$job->updated_at}}</td>
                     <td>{{$job->offer}}</td>
                     <td>{{$job->company}}</td>
                     <td>{{$job->description}}</td>
                     <td>{{$job->status}}</td>
                     <td>
                        <a href="{{ route('showDetail', ['id' => $job->id]) }}">
                            <button class="btn">Show</button>
                        </a>
                    </td>
                 </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection