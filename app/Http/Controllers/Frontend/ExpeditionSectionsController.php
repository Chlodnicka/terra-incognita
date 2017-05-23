<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ExpeditionSection;

class ExpeditionSectionsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show($id)
    {
        $expedition_section = ExpeditionSection::findOrFail($id);
        return view('frontend.expeditions_sections.show', ['expedition_section' => $expedition_section]);
    }

}
