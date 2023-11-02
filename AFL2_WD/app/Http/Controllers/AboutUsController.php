<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('about_us.index', compact('aboutUs'));
    }

    /**
     * Show the form for editing the about us data.
     */
    public function edit(AboutUs $aboutUs)
    {
        return view('about_us.edit', compact('aboutUs'));
    }

    /**
     * Update the about us data in storage.
     */
    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        $aboutUs->update($request->all());
        return redirect()->route('about-us.edit', $aboutUs)->with('success', 'About us data updated successfully');
    }

    public function show(AboutUs $aboutUs)
    {
        return view('about_us.show', compact('aboutUs'));
    }
}
