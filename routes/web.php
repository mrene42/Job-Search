<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');

