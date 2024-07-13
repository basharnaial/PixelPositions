<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag){
        // we need to find jobs for this tag like tag "software enginner"
        // $tag->jobs;
        return view('components.results', ['jobs' => $tag->jobs]);
    }
}
