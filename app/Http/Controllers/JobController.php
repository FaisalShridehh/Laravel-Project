<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\JobSchedule;
use App\Models\Tag;
use App\SalaryType;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\ValidationException;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // check if Job is empty before returning view
        if (Job::count() == 0) {
            return view('jobs.index')->with(
                [
                    'featuredJobs' => [],
                    'recentJobs' => [],
                    'tags' => Tag::all()
                ]
            );
        }

        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        // dd($jobs);
        // return $jobs;
        return view('jobs.index')->with(
            [
                'recentJobs' => $jobs[0],
                'featuredJobs' => $jobs[1],
                'tags' => Tag::all()
            ]
        );
    }
        //

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //
        $schedules = JobSchedule::cases(); // Returns an array of all enum cases
        $salaryTypes = SalaryType::cases(); // Returns an array of all enum cases

        // dd($schedules, $salaryTypes , compact('schedules', 'salaryTypes'));
        return view('jobs.create')->with(compact('schedules', 'salaryTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $attributes = $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'location' => ['required', 'string', 'max:255'],
                'company' => ['required', 'string', 'max:255'],
                'salary' => ['required', 'numeric', 'min:0'],
                'salary_type' => ['required', new Enum(SalaryType::class)],
                'description' => ['required', 'string'],
                'schedule' => ['required', new Enum(JobSchedule::class)],
                // 'url' => ['required', 'active_url'],
                'tags' => ['nullable'],
            ]);

            
            $attributes['featured'] = $request->has('featured');
            // dd($attributes, $attributes['featured']); // Check if this line is reached

            // dd($attributes);

            $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

            if ($attributes['tags'] ?? false) {
                foreach (explode(',', $attributes['tags']) as $tag) {
                    $job->tag($tag);
                }
            }

            return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
        } catch (ValidationException $e) {
            dd($e->errors()); // Debug validation errors
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
        return view('jobs.show', ['job' => $job]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
        return view('jobs.edit', ['job' => $job]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
        //

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        // $job = Job::findOrFail($id);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'company' => request('company'),
            'location' => request('location'),
            'description' => request('description'),
        ]);

        return redirect()->route('jobs.show', $job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
