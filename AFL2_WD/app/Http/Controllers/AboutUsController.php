<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use Illuminate\Routing\Controller as Controller;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {

        return view('about_us_view', [

            "about_us" => AboutUs::all(),
        ]);
    }
}
