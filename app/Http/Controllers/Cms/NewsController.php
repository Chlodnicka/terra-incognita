<?php

namespace App\Http\Controllers\Cms;

use App\Background;
use App\Http\Requests\UpdateNewsItem;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\UpdateNewsItem as Update;
use App\Http\Requests\CreateNewsItem as Create;
use App\News;


class NewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $news = News::all();
        $background = Background::findOrFail(1);
        return view('cms.news.index', ['news' => $news, 'background' => $background]);
    }


    public function add()
    {
        return view('cms.news.add');
    }

    public function create(Create $request)
    {
        $news = new News();
        $news->fill($request->all());
        if ($news->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/news/' . $news->id);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('cms.news.edit', ['news' => $news]);
    }

    public function update($id, Update $request)
    {
        $news = News::findOrFail($id);
        $news->fill($request->all());


        if ($news->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/news/' . $news->id);
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->comments()->delete();
        $news->delete();

        $news = News::all();
        return redirect('/news');
    }

}
