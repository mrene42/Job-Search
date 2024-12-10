<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobController;
use App\Http\Controllers\Api\FollowController;

Route::get("/jobs",[JobController:: class,"index"])->name("apiHome");
Route::delete("/job/{id}", [JobController::class,"destroy"])->name("apiDeleteJob");
Route::post("/jobs",[JobController::class,"store"])->name("apiCreateJob");
Route::put("/job/{id}", [JobController::class,"update"])->name("apiUpdateJob");
Route::get("/job/{id}",[JobController::class,"show"])->name("apiShowJob");

Route::post("/jobs/{jobId}/follows",[FollowController::class, "store"]);