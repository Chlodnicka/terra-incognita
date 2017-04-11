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

class ExpeditionSectionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function edit($id)
    {
        $section = ExpeditionSection::findOrFail($id);
        $expedition = Expedition::findOrFail($section->expedition_id);
        $sections = array(
            'equipment' => 'Sprzęt',
            'organization' => 'Organizacja',
            'gallery' => 'Galeria',
            'description' => 'Opis i parametry',
            'advices' => 'Porady',
        );
        return view('cms.sections.edit', ['section' => $section, 'expedition' => $expedition, 'sections' => $sections]);
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

}
