<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\DetailProject;
use App\Models\Layanan;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        return view('project_view', [

            "project" => Project::all()
        ]);
    }
    public function show($code)
    {
        $detailproject = DetailProject::DetailProjectWithCode($code);
        return view('detail_project_view', compact('detailproject'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $tes)
    {
        //
    }
}
