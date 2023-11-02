<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyProfileRequest;
use App\Models\CompanyProfile;

class CompanyProfileController extends Controller
{
    /**
     * Display the company profile.
     */
    public function index()
    {
        $companyProfile = CompanyProfile::first();
        return view('company_profile.index', compact('companyProfile'));
    }

    /**
     * Show the form for editing the company profile.
     */
    public function edit(CompanyProfile $companyProfile)
    {
        return view('company_profile.edit', compact('companyProfile'));
    }

    /**
     * Update the company profile in storage.
     */
    public function update(UpdateCompanyProfileRequest $request, CompanyProfile $companyProfile)
    {
        $companyProfile->update($request->all());
        return redirect()->route('company-profile.edit', $companyProfile)->with('success', 'Company profile updated successfully');
    }

    public function show(CompanyProfile $companyProfile)
    {
        return view('company_profile.show', compact('companyProfile'));
    }
}
