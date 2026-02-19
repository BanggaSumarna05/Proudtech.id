<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Setting;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::published()->latest()->paginate(9);
        return view('frontend.portfolio.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if (!$project->is_published) {
            abort(404);
        }
        return view('frontend.portfolio.show', compact('project'));
    }
}
