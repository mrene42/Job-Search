<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/jobs/{id}', [JobController::class,'show'])->name('showDetail');