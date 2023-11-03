<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        return view('project_view', [

            "project" => Project::all(),
        ]);
    }
}
