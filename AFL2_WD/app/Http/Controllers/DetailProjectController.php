<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetailProjectRequest;
use App\Http\Requests\UpdateDetailProjectRequest;
use App\Models\DetailProject;
use App\Models\Project;

class DetailProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('detail_project_view', [
            "detail_project" => DetailProject::all(),
        ]);
    }
    public function show($code)
    {
        return view('detail_project_view', [
            "detail_project" => DetailProject::DetailProjectWithCode($code),
        ]);
    }
}
