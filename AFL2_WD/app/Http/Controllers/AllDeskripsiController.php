<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAllDeskripsiRequest;
use App\Http\Requests\UpdateAllDeskripsiRequest;
use App\Models\AllDeskripsi;

class AllDeskripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('all_deskripsi_view', [

            "all_deskripsi" => AllDeskripsi::all(),
        ]);
    }
}
