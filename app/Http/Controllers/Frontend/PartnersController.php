<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Partner;
use App\Background;

class PartnersController extends Controller
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $background;

    public function __construct()
    {
        $this->background = Background::findOrFail(1);
    }

    public function index()
    {
        $partners = Partner::all();
        return view('frontend.partners.index', ['partners' => $partners, 'background' => $this->background]);
    }

}
