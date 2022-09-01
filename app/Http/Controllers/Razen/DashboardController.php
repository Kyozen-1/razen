<?php

namespace App\Http\Controllers\Razen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('razen.dashboard.index');
    }

    public function change_color(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->color_layout = $request->value;
        $user->save();
    }
}
