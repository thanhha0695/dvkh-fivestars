<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function contact()
    {
        $input = request()->all();
    }
}
