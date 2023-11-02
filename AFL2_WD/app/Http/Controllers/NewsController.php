<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }


    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified news item in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $news->update($request->all());
        return redirect()->route('news.edit', $news)->with('success', 'News item updated successfully');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
