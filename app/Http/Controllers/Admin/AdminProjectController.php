<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', [
            'projects' => $projects
        ]);
    }

    public function add(Request $request)
    {
        if ($request->method() == 'POST') {
            $data = $request->input();
            $data['token'] = Str::uuid();
            $data['picture'] = $request->file('picture')->store('projects');
    
            Project::create($data);
        }

        return redirect()->route('all_podcasts');
        
    }

}
