<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')
                    ->orderBy('updated_at', 'desc')
                    ->paginate(10);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'salary' => ['required'],
            'description' => ['required', 'min:10']
        ]);

        Job::create([
            'title' => $attributes['title'],
            'salary' => $attributes['salary'],
            'description' => $attributes['description'],
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Request $request, Job $job)
    {
        $attributes = $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'salary' => ['required'],
            'description' => ['required', 'min:10']
        ]);

        $job->update($attributes);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}