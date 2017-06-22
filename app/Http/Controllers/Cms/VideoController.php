<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\UpdateVideosItem as Update;
use App\Http\Requests\CreateVideosItem as Create;
use App\Video;

class VideoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $videos = Video::all();
        return view('cms.videos.index', ['videos' => $videos]);
    }


    public function add()
    {
        return view('cms.videos.add');
    }

    public function create(Create $request)
    {
        $videos = new Video();
        $videos->fill($request->all());
        $videos->ico = 'test'; //do wykomentowania jak zrobię mechanizm ładujacy zdjecia
        if ($videos->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/video/' . $videos->id);
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('cms.videos.edit', ['video' => $video]);
    }

    public function update($id, Update $request)
    {
        $video = Video::findOrFail($id);
        $video->fill($request->all());
        if ($video->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return view('cms.videos.edit', ['video' => $video]);
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect('/video');
    }

}
