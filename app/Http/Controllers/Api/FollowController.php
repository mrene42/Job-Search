<?php

namespace App\Http\Controllers\Api;

use App\Models\Job;
use App\Models\Follow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $jobId)
    {
        $validated = $request->validate([
            'news' => 'required|array'
        ]);

        $job = Job::find($jobId);

        if(!$job){
            return response()->json([
                'message' => 'El trabajo donde se solicita seguimiento no existe'
            ], 404);
        }

        $followsData = collect($validated['news'])->map(function($newsItem) use ($job){
            return[
                'job_id' => $job->id,
                'news' => $newsItem,
            ];
        });

        $job->follows()->createMany($followsData);

        return response()->json([
            'message' => 'Novedades añadidas correctamente',
            'job' => $job->load('follows'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
