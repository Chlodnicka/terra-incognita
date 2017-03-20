<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Content;

class ContentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function we()
    {
        $content = Content::getByType('ABOUT');
        return view('frontend.content.we', ['content' => $content]);
    }

    public function support()
    {
        $content = Content::getByType('SUPPORT');
        return view('frontend.content.support', ['content' => $content]);
    }

    public function contact()
    {
        $content = Content::getByType('CONTACT');
        return view('frontend.content.contact');
    }



    public function create()
    {
        $content = new Content();

        return redirect('/content');
    }

    public function edit($id)
    {
        $content = Content::all();
        return view('frontend.content.index', ['content' => $content]);
    }

    public function update($id)
    {
        $content = Content::all();
        return view('frontend.content.index', ['content' => $content]);
    }

    public function destroy($id)
    {
        $content = Content::all();
        return view('frontend.content.index', ['content' => $content]);
    }

}
