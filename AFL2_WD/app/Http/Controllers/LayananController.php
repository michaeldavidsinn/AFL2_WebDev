<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLayananRequest;
use App\Http\Requests\UpdateLayananRequest;
use Illuminate\Routing\Controller as Controller;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layanan_view', [

            "layanan" => Layanan::all(),
        ]);
    }
}
