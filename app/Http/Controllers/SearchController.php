<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // when our controller only have one action so we use invoke and in web/routes we don't mention the name of action like @create
    public function __invoke(){
//        dd(request('q'));
        // search where there is anything like title and whatever before or after thats okay
    $jobs = Job::where('title', 'LIKE', '%' . request('q') . '%')->get();
    return view('components.results', ['jobs' => $jobs]);
     }
}
