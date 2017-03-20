<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Media;

class MediaController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $media = Media::all();
        return view('media.index', ['media' => $media]);
    }

    public function show($id)
    {
        $media = Media::findOrFail($id);
        return view('media.show', ['media' => $media]);
    }

    public function add()
    {
        return view('media.add');
    }

    public function create()
    {
        $media = new Media();

        return redirect('/media');
    }

    public function edit($id)
    {
        $media = Media::all();
        return view('media.index', ['media' => $media]);
    }

    public function update($id)
    {
        $media = Media::all();
        return view('media.index', ['media' => $media]);
    }

    public function destroy($id)
    {
        $media = Media::all();
        return view('media.index', ['media' => $media]);
    }

}
