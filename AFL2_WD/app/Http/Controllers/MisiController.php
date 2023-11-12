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
}
