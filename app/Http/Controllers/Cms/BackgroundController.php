<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\UpdateBackgroundItem as Update;
use App\Background;

class BackgroundController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function update($id, Update $request)
    {
        $background = Background::findOrFail($id);
        $background->ico = $request->get('ico');
        $background->type = $request->get('type');

        if ($background->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

         return back();
    }

}
