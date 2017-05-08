<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Background;
use App\Content;

class ContentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function we()
    {
        $content = Content::getByType('ABOUT');
        $background = Background::findOrFail(5);
        return view('frontend.content.we', ['content' => $content, 'background' => $background]);
    }

    public function support()
    {
        $content = Content::getByType('SUPPORT');
        $background = Background::findOrFail(4);
        return view('frontend.content.support', ['content' => $content, 'background' => $background]);
    }

    public function contact()
    {
        $content = Content::getByType('CONTACT');
        $background = Background::findOrFail(6);
        return view('frontend.content.contact', ['content' => $content, 'background' => $background]);
    }

    public function media()
    {
        $content = Content::getByType('MEDIA');
        return view('frontend.content.media', ['content' => $content]);
    }

}
