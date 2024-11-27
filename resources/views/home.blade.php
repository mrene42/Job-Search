@extends('layouts.app')
@section('content')
    
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Offer</th>
                    <th scope="col">Company</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($jobs as $job)
                 <tr>
                     <td>{{$job->id}}</td>
                     <td>{{$job->offer}}</td>
                     <td>{{$job->company}}</td>
                     <td>{{$job->description}}...</td>
                     <td>{{$job->status}}</td>
                 </tr>
               @endforeach
            </tbody>
        </table>
    </div>
@endsection