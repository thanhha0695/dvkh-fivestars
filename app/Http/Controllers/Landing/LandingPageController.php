<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Carousel;

class LandingPageController extends Controller
{
  public function index()
  {
      $carousels = Carousel::query()->where('status', 1)->get();
      return view('landing.index', compact('carousels'));
  }
}
