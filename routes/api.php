<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobController;

Route::get("/jobs",[JobController:: class,"index"])->name("apihome");
Route::delete("/job/{id}", [JobController::class,"destroy"])->name("apiDeleteJob");