<?php

namespace App\Http\Controllers\LandingPageRazenProject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('landing-page-razen-project.index');
    }
}
