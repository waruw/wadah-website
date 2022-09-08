<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNews=News::latest()->paginate(5);
        $allContent=News::latest()->paginate(4);
        $allReads=News::latest()->paginate(12);

        // dd($allNews);

        return view('pages.media.news.news', compact('allNews', 'allContent', 'allReads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news, $slug)
    {
        $news = News::where('slug', $slug)->first();
        $categoryId = $news->category_id;

        if(Session::get('locale') == 'id'){
            $news->title = $news->title_id;
            $news->article = $news->article_id;
        }

        if($news->photos != "") {
            $news->photos = explode(";;", $news->photos);
        }

        // dd($news->photos);

        $newsByCategory = News::where('category_id', $categoryId)->paginate(5);

        return view('pages.media.news.siglenews', compact('news', 'newsByCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
