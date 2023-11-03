<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        return view('news_view', [

            "news" => News::all(),
        ]);
    }
}
