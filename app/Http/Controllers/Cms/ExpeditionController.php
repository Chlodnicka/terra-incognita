<?php

namespace App\Http\Controllers\Cms;

use App\Http\Requests\UpdateExpedition;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\CreateExpedition;
use App\Expedition;
use App\ExpeditionSection;
use App\Background;

class ExpeditionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $expeditions = Expedition::all();
        $background = Background::findOrFail(3);
        return view('cms.expeditions.index', ['expeditions' => $expeditions, 'background' => $background]);
    }

    public function show($id)
    {
        $venture = Expedition::findOrFail($id);
        return view('ventures.show', ['venture' => $venture]);
    }

    public function add()
    {
        return view('cms.expeditions.add');
    }

    public function create(CreateExpedition $request)
    {
        $expedition = new Expedition();
        $expedition->fill($request->all());
        $sections = $request->get('sections');

        if ($expedition->save()) {
            foreach ($sections as $section) {
                $expeditionSection = new ExpeditionSection();
                $expeditionSection->type = $section;
                $expeditionSection->expedition_id = $expedition->id;
                $expeditionSection->save();
            }
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/expedition/' . $expedition->id);


    }

    public function edit($id)
    {
        $expedition = Expedition::findOrFail($id);
        $sections = array(
            'equipment' => 'Sprzęt',
            'organization' => 'Organizacja',
            'gallery' => 'Galeria',
            'description' => 'Opis i parametry',
            'advices' => 'Porady',
        );

        return view('cms.expeditions.edit', ['expedition' => $expedition, 'sections' => $sections]);
    }

    public function update(UpdateExpedition $request, $id)
    {
        $expedition = Expedition::findOrFail($id);
        $expedition->fill($request->all());
        $new_sections = $request->get('sections');
        $old_sections = $expedition->sections->pluck('type')->toArray();

        $add_sections = array_diff($new_sections,$old_sections);
        $remove_sections = array_diff($old_sections, $new_sections);

        if ($expedition->save()) {
            foreach ($add_sections as $section) {
                $expeditionSection = new ExpeditionSection();
                $expeditionSection->type = $section;
                $expeditionSection->expedition_id = $expedition->id;
                $expeditionSection->save();
            }
            foreach ($remove_sections as $section) {
                $expeditionSection = ExpeditionSection::where('expedition_id', $expedition->id)->where('type', $section)->first();
                $expeditionSection->delete();
            }
            $request->session()->flash('alert_success', 'Dane zostały zapisane');
        } else {
            $request->session()->flash('alert_success', 'Błąd zapisu danych. Spróbuj jeszcze raz.');
        }

        return redirect('/expedition/' . $expedition->id);
    }

    public function destroy($id)
    {
        $ventures = Venture::all();
        return view('ventures.index', ['ventures' => $ventures]);
    }

}
