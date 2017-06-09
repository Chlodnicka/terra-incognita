<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Expedition;

class ExpeditionController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $expeditions = Expedition::all();
        return view('frontend.expeditions.index', ['expeditions' => $expeditions]);
    }

    public function show($id)
    {
        $expedition = Expedition::findOrFail($id);
        $names = array(
            'equipment' => 'Sprzęt',
            'organization' => 'Organizacja',
            'gallery' => 'Galeria',
            'description' => 'Opis i parametry',
            'advices' => 'Porady',
        );

        return view('frontend.expeditions.show', ['expedition' => $expedition, 'names' => $names]);
    }

    public function add()
    {
        return view('frontend.expeditions.add');
    }

    public function create()
    {
        $expedition = new Expedition();

        return redirect('/ventures');
    }

    public function edit($id)
    {
        $expeditions = Expedition::all();
        return view('frontend.expeditions.index', ['expeditions' => $expeditions]);
    }

    public function update($id)
    {
        $expeditions = Expedition::all();
        return view('frontend.expeditions.index', ['expeditions' => $expeditions]);
    }

    public function destroy($id)
    {
        $expeditions = Expedition::all();
        return view('frontend.expeditions.index', ['expeditions' => $expeditions]);
    }

}
