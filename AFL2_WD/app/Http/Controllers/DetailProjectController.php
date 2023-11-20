<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDetailProjectRequest;
use App\Models\DetailProject;

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
    public function show(string $projectId)
    {
        // $project = DetailProject::
        // return view('detail_project.view', [
        //     "project" => DetailProject::findOrFail($projectId),
        // ]);
        return view('detail_project_view')
        ->with('project', DetailProject::findOrFail($projectId));
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
    public function edit(DetailProject $tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetailProjectRequest $request, DetailProject $tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailProject $tes)
    {
        //
    }
}
