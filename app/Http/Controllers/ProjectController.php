<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('portfolio.index', [
            'projects' => $projects
        ]);
    }

    public function project_details($token)
    {
        $project = Project::all()->where('token', $token)->first();

        return view('portfolio.details', [
            'project' => $project
        ]);
    }
}
