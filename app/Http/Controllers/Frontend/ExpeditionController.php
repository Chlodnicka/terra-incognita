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
        $venture = Venture::findOrFail($id);
        return view('frontend.ventures.show', ['venture' => $venture]);
    }

    public function add()
    {
        return view('frontend.ventures.add');
    }

    public function create()
    {
        $ventures = new Venture();

        return redirect('/ventures');
    }

    public function edit($id)
    {
        $ventures = Venture::all();
        return view('frontend.ventures.index', ['ventures' => $ventures]);
    }

    public function update($id)
    {
        $ventures = Venture::all();
        return view('frontend.ventures.index', ['ventures' => $ventures]);
    }

    public function destroy($id)
    {
        $ventures = Venture::all();
        return view('frontend.ventures.index', ['ventures' => $ventures]);
    }

}
