<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects', ['projects' => $projects] );
    }

    public function project_page($slug) {
        $project = Project::where('slug', $slug)->first();

        if($project == null) abort('404');

        return view('project-page', ['project' => $project] );
    }
}
