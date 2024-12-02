<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobController;

Route::get("/jobs",[JobController:: class,"index"])->name("apihome");
Route::delete("/job/{id}", [JobController::class,"destroy"])->name("apiDeleteJob");
Route::post("/jobs",[JobController::class,"store"])->name("apiCreateJob");
Route::put("/job/{id}", [JobController::class,"update"])->name("apiUpdateJob");