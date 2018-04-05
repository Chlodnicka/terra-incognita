<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\UpdatePartnersItem as Update;
use App\Http\Requests\CreatePartnersItem as Create;
use App\Partner;
use App\Background;

class PartnersController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $partners = Partner::all();
        $background = Background::findOrFail(2);
        return view('cms.partners.index', ['partners' => $partners, 'background' => $background]);
    }


    public function add()
    {
        return view('cms.partners.add');
    }

    public function create(Create $request)
    {
        $partners = new Partner();
        $partners->fill($request->all());

        if ($partners->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/partners/' . $partners->id);
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('cms.partners.edit', ['partner' => $partner]);
    }

    public function update($id, Update $request)
    {
        $partner = Partner::findOrFail($id);
        $partner->fill($request->all());
        if ($partner->save()) {
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }
        return view('cms.partners.edit', ['partner' => $partner]);
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect('/partners');
    }

}
