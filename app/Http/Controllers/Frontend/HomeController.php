<?php

namespace App\Http\Controllers\Frontend;

use App\Expedition;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainExpedition = Expedition::where('is_main_expedition', 1)->first();
        return view('frontend.welcome', ['main_expedition_id' => $mainExpedition->id, 'main_expedition_name' => $mainExpedition->title]);
    }
}
