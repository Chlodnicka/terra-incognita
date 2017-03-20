<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\News;

class NewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $news = News::all();
        return view('cms.news.index', ['news' => $news]);
    }


    public function add()
    {
        return view('cms.news.add');
    }

    public function create()
    {
        $news = new News();

        return redirect('/news');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('cms.news.edit', ['news' => $news]);
    }

    public function update($id)
    {
        $news = News::all();
        return view('cms.news.index', ['news' => $news]);
    }

    public function destroy($id)
    {
        $news = News::all();
        return view('cms.news.index', ['news' => $news]);
    }

}
