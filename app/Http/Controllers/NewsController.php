<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }


    public function create()
    {
        return view ('news.create');
    }


    public function store(Request $request)
    {
        News::create($request->all());
        return redirect ('/news');
    }


    public function show(News $news)
    {
        return view ('news.show', compact('news'));
    }


    public function edit(News $news)
    {
        //
    }

    public function update(Request $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}
