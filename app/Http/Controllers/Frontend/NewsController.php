<?php

namespace App\Http\Controllers\Frontend;

use App\Background;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\News;

class NewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $background;

    public function __construct()
    {
        $this->background = Background::findOrFail(1);
    }

    public function index()
    {
        $news = News::all();
        return view('frontend.news.index', ['news' => $news, 'background' => $this->background]);
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('frontend.news.show', ['item' => $news, 'background' => $this->background]);
    }


}
