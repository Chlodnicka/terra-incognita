<?php

namespace App\Http\Controllers\Cms;

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
        return view('expeditions.index', ['expeditions' => $expeditions]);
    }

    public function show($id)
    {
        $venture = Venture::findOrFail($id);
        return view('ventures.show', ['venture' => $venture]);
    }

    public function add()
    {
        return view('ventures.add');
    }

    public function create()
    {
        $ventures = new Venture();

        return redirect('/ventures');
    }

    public function edit($id)
    {
        $ventures = Venture::all();
        return view('ventures.index', ['ventures' => $ventures]);
    }

    public function update($id)
    {
        $ventures = Venture::all();
        return view('ventures.index', ['ventures' => $ventures]);
    }

    public function destroy($id)
    {
        $ventures = Venture::all();
        return view('ventures.index', ['ventures' => $ventures]);
    }

}
