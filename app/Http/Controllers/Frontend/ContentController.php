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
        return view('frontend.content.contact', ['content' => $content]);
    }

    public function media()
    {
        $content = Content::getByType('MEDIA');
        return view('frontend.content.media', ['content' => $content]);
    }

}
