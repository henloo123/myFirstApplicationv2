<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('home');
});

// Single line for all job routes! (Step 2 - final version)
Route::resource('jobs', JobController::class);