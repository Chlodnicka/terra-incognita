<?php

namespace App\Http\Controllers\Cms;

use App\Background;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\UpdateWeSite as UpdateWe;
use App\Http\Requests\UpdateSupportSite as UpdateSupport;
use App\Http\Requests\UpdateContactSite as UpdateContact;
use App\Http\Requests\UpdateMediaSite as UpdateMedia;
use App\Content;

class ContentController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function we()
    {
        $content = Content::getByType('ABOUT');
        $background = Background::findOrFail(5);
        return view('cms.content.we', ['content' => $content, 'background' => $background]);
    }

    public function weUpdate(UpdateWe $request)
    {
        $content = Content::getByType('ABOUT');
        $data = $request->all();
        if (!$data['string_1']) {
            unset($data['string_1']);
        }

        $content->fill($data);
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.we', ['content' => $content]);
    }

    public function support()
    {
        $content = Content::getByType('support');
        $background = Background::findOrFail(4);
        return view('cms.content.support', ['content' => $content, 'background' => $background]);
    }

    public function supportUpdate(UpdateSupport $request)
    {
        $content = Content::getByType('support');
        $data = $request->all();
        if (!$data['string_1']) {
            unset($data['string_1']);
        }

        $content->fill($data);
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.support', ['content' => $content]);
    }

    public function contact()
    {
        $content = Content::getByType('contact');
        $background = Background::findOrFail(6);
        return view('cms.content.contact', ['content' => $content, 'background' => $background]);
    }

    public function contactUpdate(UpdateContact $request)
    {
        $content = Content::getByType('contact');
        $data = $request->all();
        if (!$data['string_1']) {
            unset($data['string_1']);
        }

        $content->fill($data);
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.contact', ['content' => $content]);
    }

    public function media()
    {
        $content = Content::getByType('media');
        $background = Background::findOrFail(7);
        return view('cms.content.media', ['content' => $content, 'background' => $background]);
    }

    public function mediaUpdate(UpdateMedia $request)
    {
        $content = Content::getByType('media');
        $data = $request->all();
        if (!$data['string_1']) {
            unset($data['string_1']);
        }

        $content->fill($data);
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.media', ['content' => $content]);
    }

}
