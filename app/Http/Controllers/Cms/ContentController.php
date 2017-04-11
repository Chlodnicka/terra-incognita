<?php

namespace App\Http\Controllers\Cms;

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
        return view('cms.content.we', ['content' => $content]);
    }

    public function weUpdate(UpdateWe $request)
    {
        $content = Content::getByType('ABOUT');
        $content->fill($request->all());
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.we', ['content' => $content]);
    }

    public function support()
    {
        $content = Content::getByType('SUPPORT');
        return view('cms.content.support', ['content' => $content]);
    }

    public function supportUpdate(UpdateSupport $request)
    {
        $content = Content::getByType('SUPPORT');
        $content->fill($request->all());
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.support', ['content' => $content]);
    }

    public function contact()
    {
        $content = Content::getByType('CONTACT');
        return view('cms.content.contact', ['content' => $content]);
    }

    public function contactUpdate(UpdateContact $request)
    {
        $content = Content::getByType('CONTACT');
        $content->fill($request->all());
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.contact', ['content' => $content]);
    }

    public function media()
    {
        $content = Content::getByType('MEDIA');
        return view('cms.content.media', ['content' => $content]);
    }

    public function mediaUpdate(UpdateMedia $request)
    {
        $content = Content::getByType('MEDIA');
        $content->fill($request->all());
        if ($content->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.content.media', ['content' => $content]);
    }

}
