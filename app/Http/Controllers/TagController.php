<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        //
        // $job = $tag->jobs();
        // dd($job);
        return view(
        'search.results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
    }
}
