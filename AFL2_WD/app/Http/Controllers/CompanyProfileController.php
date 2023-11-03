<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyProfileRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Routing\Controller as Controller;
use App\Models\CompanyProfile;

class CompanyProfileController extends Controller
{

    public function index()
    {
        return view('company_profile_view', [

            "company_profile" => CompanyProfile::all(),
        ]);
    }

}
