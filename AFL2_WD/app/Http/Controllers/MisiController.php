<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMisiRequest;
use App\Http\Requests\UpdateMisiRequest;
use App\Models\Misi;

class MisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('misi_view', [

            "misi" => Misi::all(),
        ]);
    }
    public function show($code)
    {
       //
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
    public function edit(Misi $tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMisiRequest $request, Misi $tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Misi $tes)
    {
        //
    }
}
