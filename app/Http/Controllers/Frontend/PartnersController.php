<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Partner;

class PartnersController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $partners = Partner::all();
        return view('frontend.partners.index', ['partners' => $partners]);
    }


    public function add()
    {
        return view('frontend.partners.add');
    }

    public function create()
    {
        $partners = new Partner();

        return redirect('/partners');
    }

    public function edit($id)
    {
        $partners = Partner::all();
        return view('frontend.partners.index', ['partners' => $partners]);
    }

    public function update($id)
    {
        $partners = Partner::all();
        return view('frontend.partners.index', ['partners' => $partners]);
    }

    public function destroy($id)
    {
        $partners = Partner::all();
        return view('frontend.partners.index', ['partners' => $partners]);
    }

}
