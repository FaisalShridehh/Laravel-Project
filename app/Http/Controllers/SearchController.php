<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $searchedJobs = Job::query()
        ->with(['employer' , 'tags'])
        ->where('title', 'like', "%{$request->job}%")
        ->get();
        
        return view('search.results', ['jobs' => $searchedJobs]);
    }
}
