<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')
                    ->orderBy('updated_at', 'desc')  // Most recently updated first
                    ->paginate(10)
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    $attributes = request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required'],
        'description' => ['required', 'min:10']
    ]);

    \App\Models\Job::create([
        'title' => $attributes['title'],
        'salary' => $attributes['salary'],
        'description' => $attributes['description'],
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Show Edit Form
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update a Job
Route::patch('/jobs/{job}', function (Job $job) {
    // Validation
    $attributes = request()->validate([
        'title' => ['required', 'min:3', 'max:255'],
        'salary' => ['required'],
        'description' => ['required', 'min:10']
    ]);

    // Update the job
    $job->update($attributes);

    // Redirect to the job page
    return redirect('/jobs/' . $job->id);
});

// Delete a Job
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});
