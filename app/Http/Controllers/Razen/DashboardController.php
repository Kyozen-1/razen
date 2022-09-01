<?php

namespace App\Http\Controllers\Razen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('razen.dashboard.index');
    }
}
